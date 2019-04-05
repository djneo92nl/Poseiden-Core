#Poseiden-Core
--

The local server for the Poseiden Home automation service.
This service has a local Interface and the required backend services available.


##Installing 
The application is based on PHP and can run on a Raspberry Pi 3
For performance reason the following software is advised

- PHP 7.2
- Redis
- MariaDB
- PHP-Swoole

### Guide

Install Rasbian on the Raspberry Pi

 - Run Raspi-config and set the Memory split to 16 for the GPU and expand the Filesystem
 - Install Redis
``https://habilisbest.com/install-redis-on-your-raspberrypi``

Swoole on a Raspberry Pi 3 can be installed with the following guide 

`` https://littlefatty.top/2018/08/04/树莓派raspberry-pi-3b安装swoole/ ``

But install php 7.3 with the following config

```
wget https://www.php.net/distributions/php-7.3.4.tar.gz
tar -zxvf php-7.3.4.tar.gz
cd php-7.3.4
./configure \
--prefix=/usr/local/php \
--exec-prefix=/usr/local/php \
--bindir=/usr/local/php/bin \
--sbindir=/usr/local/php/sbin \
--includedir=/usr/local/php/include \
--libdir=/usr/local/php/lib/php \
--mandir=/usr/local/php/php/man \
--with-config-file-path=/usr/local/php/etc \
--with-mysql-sock=/var/lib/mysql/mysql.sock \
--with-mcrypt=/usr/include \
--with-mhash \
--with-openssl \
--with-mysql=shared,mysqlnd \
--with-mysqli=shared,mysqlnd \
--with-pdo-mysql=shared,mysqlnd \
--with-gd \
--with-iconv \
--with-zlib \
--enable-zip \
--enable-inline-optimization \
--disable-debug \
--disable-rpath \
--enable-shared \
--enable-xml \
--enable-bcmath \
--enable-shmop \
--enable-sysvsem \
--enable-mbregex \
--enable-mbstring \
--enable-ftp \
--enable-gd-native-ttf \
--enable-pcntl \
--enable-sockets \
--with-xmlrpc \
--enable-soap \
--without-pear \
--with-gettext \
--enable-session \
--with-curl \
--with-freetype-dir \
--enable-opcache \
--enable-redis \
--enable-fpm \
--enable-fastcgi \
--enable-fileinfo
make && sudo make install
```

if you get a message saying ``Missing Lib-zip``
You can install it with ``apt-get install libzip-dev``

![](https://media.giphy.com/media/l0MYGtCMbPTYWOzaU/giphy.gif)


> It Takes quite a while


 - install Nginx `https://www.raspberrypi.org/documentation/remote-access/web-server/nginx.md`
 - Install Composer 
    - ``cd ~``
    - ``curl -sS https://getcomposer.org/installer | php``
    - ``sudo mv composer.phar /usr/local/bin/composer``
    
    
 - Install Poseiden
     - ``cd /var/www`` 
     - ``sudo mkdir poseiden``
     - ``git checkout `` 
     