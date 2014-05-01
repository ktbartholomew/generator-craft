#!/bin/bash
sudo apt-get update
sudo apt-get install php5-mcrypt -qq
sudo cp /vagrant/vhost.conf /etc/apache2/sites-enabled/000-default
sudo mkdir /vagrant/craft/storage
sudo service apache2 restart

mysql -u root < /vagrant/pre_db.sql
mysql -u root <%= dbName %> < /vagrant/craft.sql