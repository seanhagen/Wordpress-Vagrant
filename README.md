Wordpress Vagrant
=================

## Or, How To Run Vagrant Inside Wordpress

This is Wordpress 3.8.1, with a [PuPHPet][http://puphpet.com] generated [Vagrant][http://vagrantup.com] configuration.

## How To Run

1. On Linux: edit /etc/hosts, add the following line:
        192.168.56.101 wordpress.dev
2. Type 'vagrant up'
3. Point your browser at http://wordpress.dev

If you've got a database dump of an existing Wordpress install, drop that into db-dumps/latest.sql, and uncomment the last line in puppet/hieradata/common.yaml

## How To Contribute

Fork & pull request!

