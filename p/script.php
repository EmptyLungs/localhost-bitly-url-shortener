<?php
/**
 * Created by PhpStorm.
 * User: rint
 * Date: 14.08.2016
 * Time: 22:53
 */
require 'bd_conn.php';
include 'curl.php';
include 'func.php';


$action = $_POST['action'];
switch($action){
    case 'localhost':
        $longurl = $_POST['longurl'];
        $code = generateRandomString();

        $statement = $bd->prepare("INSERT INTO urls(url, code) VALUES(:url,:code)");
        $statement->execute(array(
            "url" => $longurl,
            "code" => $code
        ));

        echo '<a href="redirect.php?code='.$code.'">localhost/shorty/p/redirect.php?code='.$code.'</a>';
        break;
    case 'bit':
        $longurl = $_POST['longurl'];
        $short = get_bitly_short_url($longurl);

        $statement = $bd->prepare("INSERT INTO urls(url, code) VALUES(:url,:code)");
        $statement->execute(array(
            "url" => $longurl,
            "code" => $short
        ));



        echo $short;
        break;


}


/**if(isset ($_POST['longurl'])) {
    $longurl = $_POST['longurl'];
    $code = generateRandomString();

    $statement = $bd->prepare("INSERT INTO urls(url, code) VALUES(:url,:code)");
    $statement->execute(array(
        "url" => $longurl,
        "code" => $code
    ));

    echo '<a href="redirect.php?code='.$code.'">localhost/shorty/p/redirect.php?code='.$code.'</a>';


} */