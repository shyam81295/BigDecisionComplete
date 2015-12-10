## Programming Question's Solutions:

It is provided in the `ProgrammingSolutions` folder, in this repository.

## Prerequisites for Automation assignment:

To make use of these files, you'll need to have the following prerequisites installed on your workstation:

* [VirtualBox](https://www.virtualbox.org/)
* [Vagrant](http://www.vagrantup.com/)
* [Ansible](http://www.ansibleworks.com)
* python-wordpress-xmlrpc (how to install : sudo easy_install python-wordpress-xmlrpc ) 

## What It Does

Together with the prerequisites listed above, the scripts contained herein will let you create a new VM with a simple `vagrant up` that:

* Is configured with a static IP address on your local LAN (default 196.165.75.76) so you don't need to constantly be looking up new DHCP-assigned addresses each time it restarts
* Has a complete MySQL 5 setup (client and server) installed
* Has a complete Apache 2 setup installed (with mod_rewrite)
* Has a complete PHP5 setup (both mod_php and CLI versions) installed, with the following modules:
    * php5-curl
    * php5-gd
    * php5-imagick
    * php5-mysql
    * php5-sqlite
    * php5-xcache
    * php5-xmlrpc
* Installs the latest version of the WordPress software in /vagrant, so you can work with local files via your favorite editor/IDE; sets up symlink to it at /var/www/wordpress`so Apache can find it
* Has a MySQL database (name: "wordpress") and database user (name: "user_wp"; password: "wordpress") for WordPress to make use of
* Has a configuration file in `/root/.my.cnf` to allow the root user to log into MySQL as root without needing to enter a username or password
* Has an Apache virtual host configured and enabled to serve WordPress

So, once the box is provisioned, all you need to do is go to 196.165.75.76 in your browser to begin the famous WordPress 5-minute install.
* After submitting databse details and account details of WordPress, put details of 

## Getting Started

Clone this repository to start the installation of WordPress and other things.
After cloning, go to the directory where it is cloned, Then just run the command `vagrant up` and your VM should bootstrap itself into existence, ready to work with. 

[More information on working with Vagrant VMs, including how to shell into a running VM and shut it down safely, is available in the Vagrant documentation.](http://docs.vagrantup.com/v2/getting-started/index.html)

## Customization/Configuration

**If you use the default box, no configuration should be required to get up and running.** However, in the file named `Vagrantfile`, you *may* wish to change the following:

* If you want to use an IP address other than 196.165.75.76, replace that address with the one you wish to use in two places:
    * `Vagrantfile`, on line 9
    * `vagrant-inventory`, on line 2
    * `input.txt`, on line 1

**Also, Before running python script , follow below steps to run script correctly**:
    * Url with IP-address of remote server where VM is runnung (Example: http://196.165.75.76/). This should always be "First" line of 			`input.txt`
    * Username (Example: root). This is the WordPress Account Username, where you want to create posts. This should always be "Second" line of 			`input.txt`
    * Password (Example: abcde). This is the WordPress Account Password, where you want to create posts. This should always be "Third" line of 			`input.txt`
    * Title of Post (Example: My new Post!). This should always be "Fourth" line of `input.txt`
    * Content of Post(Example: New Post is... ). This should start from "Fifth" line of `input.txt`

* Once you make changes in `input.txt` then you can create as many posts as you want! 
	* If you want to change account, you have to only change in "second" and "third" line of `input.txt`, since it contains account login 			details.	
	* If you want to change title of post, you have to only change in "fourth" line of `input.txt`.
	* If you want to change Content of post, you have to only change from "fifth" line to "last" line of `input.txt`.
# BigDecisionComplete
