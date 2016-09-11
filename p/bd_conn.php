<?php
/**
 * Created by PhpStorm.
 * User: rint
 * Date: 14.08.2016
 * Time: 23:09
 */
$dsn = "'mysql:host=localhost;dbname=urls'";
$username = "root";
$password = "";

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}



$bd = new PDO($dsn, $username, $password);
