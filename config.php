<?php

$database_config = (object) [
    'host'    => 'http://arnomaskan.ir/',
    'user'    => 'arnoma',
    'pass'    => '1q2w3e',
    'dbname'  => 'arnoma_registration'
];
try {
echo "try to connection";
    $pdo = new PDO("mysql:host={$database_config->host};dbname={$database_config->dbname}", $database_config->user, $database_config->pass);
    $pdo->exec('set names utf8');

} catch (Exception $e) {
    die("There is something wrong with connection, error: " . $e->getMessage());
}