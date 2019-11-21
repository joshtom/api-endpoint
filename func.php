<?php

$db_host = "localhost";
$db_name = "api";
$db_user = "root";
$db_pass = "root";

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("No connection :".mysqli_error());

function settings($key){
    global $connection;

    $sql = mysqli_query($connection, "SELECT value FROM settings WHERE key_name = '$key'");

    $rs = mysqli_fetch_assoc($sql);

    return $rs['value'];
}


function setSettings($key, $value){
    global $connection;

    $sql = mysqli_query($connection, "UPDATE settings SET value = '$value' WHERE key_name = '$key'");

}


var_dump(settings("about"));

var_dump(settings("welcome"));


setSettings("about","About has just been updated right now");

var_dump(settings("about"));


?>