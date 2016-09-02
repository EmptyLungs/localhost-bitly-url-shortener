<?php
/**
 * Created by PhpStorm.
 * User: rint
 * Date: 03.09.2016
 * Time: 2:36
 */


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function get_bitly_short_url($url) {
    //$url = $_POST['longurl'];
    $connectURL = 'http://api.bit.ly/v3/shorten?login=emptylungs&apiKey=R_9899d1f9bf504c4b85cc9fc3482757c3&uri='.urlencode($url).'&format=txt';
    return strval(curl_get_result($connectURL));
}