<?php

$database_config = (object) [
    'host'    => '127.0.0.1',
    'user'    => 'root',
    'pass'    => '',
    'dbname'  => 'aroma'
];
try {
    $pdo = new PDO("mysql:host={$database_config->host};dbname={$database_config->dbname}", $database_config->user, $database_config->pass);
    $pdo->exec('set names utf8');

} catch (Exception $e) {
    die("There is something wrong with connection, error: " . $e->getMessage());
}