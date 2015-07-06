<?php
$settings = [
    'host' => '127.0.0.1',
    'port' => '3306',
    'name' =>  'blog',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
];

$settings['dsn'] = "mysql:host={$settings['host']};dbname={$settings['name']}";
