# RobotechServer-Project

The whole files and docs to make a DIY Raspberry pi server which manages your mails and website... and even more things.


--------------------------------------------------------------------------------------------------------------------------
Steps to mount a webserver on your laptot in order to make test


* ``sudo apt-get update``

**+++ To install webserver +++**

* ``sudo apt-get install apache2``

* ``sudo service apache2 restart``

**+++ To install and set up bbdd +++**

* ``sudo apt-get install mysql-server php5-mysql``
* ``mysql -u root``
* ``mysql -u root -p`` (sin no introdujiste el password durante la instalación)

**+++ Install php +++**

* ``sudo apt-get install php libapache2-mod-php5 php5-mycrypt``
* ``sudo apt-get install php5-sqlite``

**+++ Install a GUI for bbdd +++**

* ``sudo apt-get install phpmyadmin``

**+++ If you want to disable apache wake on boot +++**

* ``sudo update-rc.d apache2 disable``

**+++ If you want to host the website at your test server you should copy htlm folder of the repository on the directory /var/www of your filesystem +++**

``cp /home/RobotechServer-Project/html /var/www``
