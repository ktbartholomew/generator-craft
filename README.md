# generator-craft [![Build Status](https://travis-ci.org/ktbartholomew/generator-craft.svg?branch=master)](https://travis-ci.org/ktbartholomew/generator-craft)

> A Yeoman generator that creates a Vagrant box, then installs the Craft CMS and some front-end tools.

## Pre-requisites

`generator-craft` makes a number of assumptions about your environment:

* You have Vagrant installed
* You have a Vagrant box that runs a recent version of Ubuntu (I test on 14.04)
* That Vagrant box has a sane LAMP installation, including (at least) the following packages:
  * mysql-server
  * apache2
  * php5
  * php5-mysql
  * php5-curl
  * php5-mcrypt
* Any existing VirtualHosts can be overridden by replacing `/etc/apache2/sites-available/000-default.conf` (because that's what this generator will try to do.)

And, of course you need node, npm, Grunt, Yeoman...all the usual goodies. To use Grunt as intended, you'll need the Compass gem installed.

## Using generator-craft

Just run `yo craft` and answer the appropriate prompts. Be sure to use the name of a Vagrant box that actually exists.

```
$ yo craft

[?] What is the name of the Vagrant box you wish to import?
[?] What would you like to name the site?
[?] Where is your database hosted?
[?] What is the name of the database user?
[?] What is the database user's password? (default is blank) 
[?] What would you like to name the database?
[?] Which grid system would you like to use?
```

After everything is done, you _should_ have a Vagrant instance with Craft installed and ready to go. Because of the way trials work in Craft 2, you'll need to access the box at the URL "craft.dev". The simplest way to do this is to add a line to your /etc/hosts file so that "craft.dev" will resolve to 127.0.0.1 (if you use port forwarding) or the box's private IP (if you use private networking).

Assuming you forward port 8080 on your host to port 80 on the guest, you would then access the front-end at [http://craft.dev:8080/](http://craft.dev:8080/) and the control panel at [http://craft.dev:8080/admin](http://craft.dev:8080/admin) with these credentials:

**User: ** admin <br>
**Pass: ** password

## Notes

The Craft installation **will** be out-of-date. Just use the updater on the Control Panel to update it before you start working.