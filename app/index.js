'use strict';
var util = require('util');
var path = require('path');
var proc = require('child_process');
var rimraf = require('rimraf');
var yeoman = require('yeoman-generator');
var chalk = require('chalk');


var CraftGenerator = yeoman.generators.Base.extend({
  init: function () {
    var generator = this;
    this.pkg = require('../package.json');

    this.on('end', function () {
      if (!this.options['skip-install']) {
        this.installDependencies({
          callback : function () {
            proc.exec('grunt dev', function (error, stdout, stderr) {
              generator._finish();  
            });
          }
        });
      }
      else {
        proc.exec('grunt dev', function (error, stdout, stderr) {
          this._finish();  
        });  
      }
    });
  },

  askFor: function () {
    var cb = this.async();

    // have Yeoman greet the user
    this.log(this.yeoman);

    // replace it with a short and sweet description of your generator
    this.log(chalk.magenta('You\'re using the incredible Craft CMS generator.'));

    var prompts = [
      {
        type: 'text',
        name: 'siteName',
        message: 'What would you like to name the site?',
        default: 'Default Site',
      },
      {
        type: 'text',
        name: 'dbHost',
        message: 'Where is your database hosted?',
        default: 'localhost'
      },
      {
        type: 'text',
        name: 'dbUser',
        message: 'What is the name of the database user?',
        default: 'root'
      },
      {
        type: 'password',
        name: 'dbPass',
        message: 'What is the database user\'s password? (Leave blank if using Vagrant)',
        default: ''
      },
      {
        type: 'text',
        name: 'dbName',
        message: 'What would you like to name the database?',
        default: 'defaultsite_dev'
      },
      {
        type: 'list',
        name: 'gridSystem',
        message: 'Which grid system would you like to use?',
        choices: [
          'Toast (old)',
          'Toast (new)',
          'Bootstrap Grid',
          'Jeet [http://jeet.gs/]'
        ]
      }
    ];

    this.prompt(prompts, function (props) {
      this.siteName = props.siteName;
      this.dbHost   = props.dbHost;
      this.dbUser   = props.dbUser;
      this.dbPass   = props.dbPass;
      this.dbName   = props.dbName;
      this.gridSystem = props.gridSystem;

      cb();
    }.bind(this));
  },

  craft: function () {
    this.directory('craft','craft');
    this.directory('public','public');
    this.mkdir('public/images');

    this.template('_package.json', 'package.json');
    this.template('_bower.json', 'bower.json');
    this.template('_general.php','craft/config/general.php');
    this.template('_db.php', 'craft/config/db.php');
    this.template('gitignore','.gitignore');
  },

  installGrid: function () {
    switch(this.gridSystem) {
      case 'Toast (old)':
        this.copy('grids/oldToast.scss','public/src/css/sass/_grid.scss');
      break;
      case 'Toast (new)':
        this.copy('grids/newToast.scss','public/src/css/sass/_grid.scss');
      break;
      case 'Bootstrap':
        this.copy('grids/bootstrap.scss','public/src/css/sass/_grid.scss');
      break;
      case 'Jeet [http://jeet.gs/]':
        this.copy('grids/jeet.scss','public/src/css/sass/_grid.scss');
      break;
    }
  },

  preVagrant: function () {
    this.copy('tmp/vhost.conf','vhost.conf');
    this.template('tmp/pre_db.sql','pre_db.sql');
    this.copy('tmp/craft.sql', 'craft.sql');
    this.template('tmp/setup.sh','setup.sh');
  },

  vagrant: function () {
    var cb = this.async();

    proc.exec('vagrant box list --machine-readable', function (error, stdout, stderr) {
      if( stdout.indexOf('lamp3') != -1) {
        var boxName = 'lamp3';
      }
      else if( stdout.indexOf('lamp2.1') != -1) {
        var boxName = 'lamp2.1';
      }
      else {
        return false;
      }
      console.log('Cloning this Vagrant box: %s', boxName);

      proc.exec('vagrant init ' + boxName, function (error, stdout, stderr) {
        console.log('Cloning the Vagrant box. This could take a while...');
        proc.exec('vagrant up --machine-readable', function (error, stdout, stderr) {
          console.log('Running some commands to set up the box...');
          proc.exec('vagrant ssh --machine-readable -c "sh /vagrant/setup.sh"', function (error, stdout, stderr) {
            cb();
          });
        });
      });
    });

    
  },

  cleanUp : function () {
    console.log('Cleaning up...');

    rimraf.sync('vhost.conf');
    rimraf.sync('pre_db.sql');
    rimraf.sync('craft.sql');
    rimraf.sync('setup.sh');
  },

  projectfiles: function () {
    this.copy('_Gruntfile.js', 'Gruntfile.js');
    this.copy('editorconfig', '.editorconfig');
    this.copy('jshintrc', '.jshintrc');
    this.copy('bowerrc', '.bowerrc');
  },

  _finish : function () {
    console.log( chalk.green(this._.template(this.read('_finishMessage'), {})) );
  }
});

module.exports = CraftGenerator;