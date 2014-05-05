# generator-craft [![Build Status](https://travis-ci.org/ktbartholomew/generator-craft.svg?branch=master)](https://travis-ci.org/ktbartholomew/generator-craft)

> A Yeoman generator that creates a Vagrant box, then installs the Craft CMS and some front-end tools.

## Pre-requisites

`generator-craft` makes a number of assumptions about your environment:

* You have Vagrant installed
* You have a Vagrant box ready to clone that already has a LAMP stack installed and the DocumentRoot set to `/vagrant/public`.

And, of course you need node, npm, Grunt, Yeoman...all the usual goodies.

To use Grunt as intended, you'll need the Compass gem installed.

## Using generator-craft

```
$ yo craft
```
