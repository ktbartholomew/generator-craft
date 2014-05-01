module.exports = function (grunt) {
  grunt.initConfig({
    compass : {
      dev : {
        options : {
          cssPath : 'public/src/css',
          sassPath : 'public/src/css/sass',
          environment : 'development'
        }  
      },
      build : {
        options : {
          cssPath : 'public/dist/css',
          sassPath : 'public/src/css/sass',
          environment : 'production'
        }  
      }
    },
    jshint : {
      dev : {
        options: {
          jshintrc: '.jshintrc',
        },
        files: {
          src: ['public/src/**/*.js'],
        },
      }
    },
    requirejs: {
      build: {
        // Options: https://github.com/jrburke/r.js/blob/master/build/example.build.js
        options: {
          baseUrl: 'public/src/js',
          out: 'public/dist/js/site.js',
          name: 'site',
          optimize: 'uglify',
          preserveLicenseComments: false,
          useStrict: true
        }
      }
    },
    watch : {
      sass : {
        files : 'public/src/css/sass/**/*.scss',
        tasks : 'compass:dev',
      },

      js : {
        files: ['public/src/**/*.js'],
        tasks: ['jshint:dev'],
      },

      livereload : {
        options: {
          livereload: true,
        },
        files: [
          'craft/templates/**/*.{html,htm,twig}',
          'public/*.{htm,html,php}',
          'public/src/**/*.css',
          'public/src/**/*.js',
          'public/images/{,*/}*.{png,jpg,jpeg,gif,webp}',
          'public/bower_components/**/*.{js,css}',
        ]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-requirejs');

  grunt.registerTask('dev', ['compass:dev','jshint:dev']);
  grunt.registerTask('build',['compass:build','requirejs:build']);

};