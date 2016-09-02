<?php
/**
 * Created by PhpStorm.
 * User: rint
 * Date: 14.08.2016
 * Time: 23:09
 */


$server_name = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server_name, $username, $password);
if (!$conn){
    die("connection failed". mysqli_connect_error());
}
$bd = new PDO('mysql:host=localhost;dbname=urls', $username, $password);