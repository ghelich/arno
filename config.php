<?php

$database_config = (object) [
    'host'    => 'localhost',
    'user'    => 'root',
    'pass'    => '',
    'dbname'  => 'aroma'
];
try {
    $pdo = new PDO("mysql:host={$database_config->host};dbname={$database_config->dbname};charset=utf8", $database_config->user, $database_config->pass ,   array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
    ));
    $stmt= $pdo->prepare('set names utf8');
    $stmt->execute();

} catch (Exception $e) {
    die("There is something wrong with connection, error: " . $e->getMessage());
}