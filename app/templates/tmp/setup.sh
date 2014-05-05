#!/bin/bash
sudo apt-get update
sudo apt-get install php5-mcrypt php5-curl -qq
sudo php5enmod mcrypt

sudo cp /vagrant/vhost.conf /etc/apache2/sites-available/000-default.conf
sudo ln -s /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/000-default.conf

sudo a2enmod rewrite
sudo a2enmod php5

sudo mkdir /vagrant/craft/storage
sudo service apache2 restart

mysql -u root < /vagrant/pre_db.sql
mysql -u root <%= dbName %> < /vagrant/craft.sql