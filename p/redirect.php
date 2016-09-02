<?php
/**
 * Created by PhpStorm.
 * User: rint
 * Date: 14.08.2016
 * Time: 23:07
 */
require 'bd_conn.php';
    if(isset($_GET['code'])) {
        $code = $_GET['code'];
        $query = $bd->prepare('SELECT url FROM urls WHERE code=:code');
        $query->bindValue(':code', $code, PDO::PARAM_STR);
        $query->execute();

        $url = '';
        while ($row = $query->fetch()) {
            $url = $row['url'];
        }
        //echo $url;

        $inc = $bd->prepare('UPDATE urls SET count = count+1 WHERE code=:code');
        $inc->bindValue(':code', $code);
        $inc->execute();

        header("Location:" . $url);
    }