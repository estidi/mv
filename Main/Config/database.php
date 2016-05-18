<?php


Config::setName('database');

$setup = array(
    'type' => 'mysql', //Database type
    'host' => '127.0.0.1', //Datavase host
    'user' => 'root', //Databae user
    'pass' => 'password', //Database password
    'name' => 'test', //name of database
    'prefix' => 'test_', // Prefix of database;
    'charset' => 'UTF8',
    // Optional
    'dns' => 'mysql:host=127.0.0.1;dbname=test;charset=UTF8',
    'usedns' => false
);
Config::set(null, $setup);

Config::setName();
