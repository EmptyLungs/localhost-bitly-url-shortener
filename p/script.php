<?php
/**
 * Created by PhpStorm.
 * User: rint
 * Date: 14.08.2016
 * Time: 22:53
 */
require 'bd_conn.php';
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if(isset ($_POST['longurl'])) {
    $longurl = $_POST['longurl'];
    $code = generateRandomString();

    $statement = $bd->prepare("INSERT INTO urls(url, code) VALUES(:url,:code)");
    $statement->execute(array(
        "url" => $longurl,
        "code" => $code
    ));

    echo '<a href="redirect.php?code='.$code.'">localhost/shorty/p/redirect.php?code='.$code.'</a>';


}