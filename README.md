# RobotechServer-Project

The whole files and docs to make a DIY Raspberry pi server which manages your mails and website... and even more things.


--------------------------------------------------------------------------------------------------------------------------
Steps to mount a webserver on your laptot in order to make test

* ``sudo add-apt-repository ppa:ondrej/php``

* ``sudo apt-get update``

**+++ To install webserver +++**

* ``sudo apt-get install apache2``

* ``sudo service apache2 restart``

**+++ To install and set up bbdd +++**

* ``sudo apt-get install mysql-server``
* ``mysql -u root``
* ``mysql -u root -p`` (si no introdujiste el password durante la instalación)

**+++ Install php +++**

* ``sudo apt-get install php7.0 php5.6 php5.6-mysql php-gettext php5.6-mbstring php-xdebug libapache2-mod-php5.6 libapache2-mod-php7.0``


**+++ Install a GUI for bbdd +++**

* ``sudo apt-get install phpmyadmin``

**+++ If you want to disable apache wake on boot +++**

* ``sudo update-rc.d apache2 disable``

**+++ If you want to host the website at your test server you should copy htlm folder of the repository on the directory /var/www of your filesystem +++**

``rm -r /var/www/html``

``cd /var/www``

``git clone https://github.com/RoboTech-URJC/RobotechServer-Project.git html``

