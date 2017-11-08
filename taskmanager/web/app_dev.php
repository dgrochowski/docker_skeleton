<?php

$dsn = 'mysql:dbname=symfony;host=mysql';
$user = 'symfony';
$password = 'symfony';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connected successfully!';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
