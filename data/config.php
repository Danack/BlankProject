<?php

// This is a sample configuration file

$default = [
    //global/default variables go here.
    'nginx.sendFile' => 'off',
    
    'mysql.charset' => 'utf8mb4',
    'mysql.collation' => 'utf8mb4_unicode_ci',
    'mysql.casetablenames' => '0',
    'mysql.datadir' => '/var/lib/mysql',
    'mysql.socket' => '/var/lib/mysql/mysql.sock',
    'mysql.log.directory' => '/var/log',

    'github.root.directory' => '/home/github/',
];


$amazonec2 = [
    'nginx.log.directory' => '/var/log/nginx',
    'nginx.root.directory' => '/usr/share/nginx',
    'nginx.conf.directory' => '/etc/nginx',
    'nginx.run.directory' => '/var/run',
    'nginx.user' => 'nginx',
    'nginx.sendFile' => 'on',


    '%PROJECT%.root.directory' => '/home/%PROJECT%/current',
    '%PROJECT%.cache.directory' => '/home/%PROJECT%/current/var/cache',

    'phpfpm.socket' => '/var/run/php-fpm',
    'phpfpm.www.maxmemory' => '16M',
    'phpfpm.images.maxmemory' => '48M',
    'phpfpm.user' => 'intahwebz',
    'phpfpm.group' => 'www-data',
    'phpfpm.socket.directory' => '/var/run/php-fpm',
    'phpfpm.conf.directory' => '/etc/php-fpm.d',
    'phpfpm.pid.directory' => '/var/run/php-fpm',

    'php.log.directory' => '/var/log/php',
    'php.errorlog.directory' => '/var/log/php',
    'php.session.directory' => '/var/lib/php/session',

    'mysql.casetablenames' => '0',
    'mysql.datadir' => '/var/lib/mysql/',
    'mysql.socket' => '/var/lib/mysql/mysql.sock',
    'mysql.log.directory' => '/var/log',
];




//$centos = [
//    'nginx.log.directory' => '/var/log/nginx',
//    'nginx.root.directory' => '/usr/share/nginx',
//    'nginx.conf.directory' => '/etc/nginx',
//    'nginx.run.directory ' => '/var/run',
//    'nginx.user' => 'nginx',
//    'nginx.sendFile' => 'on',
//    
//    '%PROJECT%.root.directory' => '/home/%PROJECT%/demos/current',
//    
//    'phpfpm.socket' => '/var/run/php-fpm',
//    'phpfpm.www.maxmemory' => '16M',
//    'phpfpm.images.maxmemory' => '48M',
//    'phpfpm.user' => 'intahwebz',
//    'phpfpm.group' => 'www-data',
//    'phpfpm.socket.directory' => '/var/run/php-fpm',
//    'phpfpm.conf.directory' => '/etc/php-fpm.d',
//    'phpfpm.pid.directory' => '/var/run/php-fpm',
//    
//    'php.conf.directory' => '/etc/php',
//    'php.log.directory' => '/var/log/php',
//    'php.errorlog.directory' => '/var/log/php',
//    'php.session.directory' => '/var/lib/php/session',
//    
//    'mysql.casetablenames' => '0',
//    'mysql.datadir' => '/var/lib/mysql',
//    'mysql.socket' => '/var/lib/mysql/mysql.sock',
//    'mysql.log.directory' => '/var/log',
//];


$centos_guest = [
    'nginx.log.directory' => '/var/log/nginx',
    'nginx.root.directory' => '/usr/share/nginx',
    'nginx.conf.directory' => '/etc/nginx',
    'nginx.run.directory' => '/var/run',
    'nginx.user' => 'nginx',
    'nginx.sendFile' => 'off',

    '%PROJECT%.root.directory' => '/home/github/%PROJECT%/%PROJECT%/',
    

    
    'phpfpm.maxmemory' => '16M',
    'phpfpm.user' => '%PROJECT%',
    'phpfpm.group' => 'www-data',
    'phpfpm.socket.directory' => '/var/run/php-fpm',
    'phpfpm.conf.directory' => '/etc/php-fpm.d',
    'phpfpm.pid.directory' => '/var/run/php-fpm',
    
    'php.conf.directory' => '/etc/php',
    'php.log.directory' => '/var/log/php',
    'php.errorlog.directory' => '/var/log/php',
    'php.session.directory' => '/var/lib/php/session',

    'ssl.directory' => '/temp/ssl',
];
