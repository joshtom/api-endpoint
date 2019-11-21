<?php

error_reporting(1);
$db_host = "localhost";
$db_name = "api";
$db_user = "root";
$db_pass = "root";

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("No connection :".mysqli_error());

?>