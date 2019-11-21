<?php

error_reporting(1);
$db_host = "localhost";
$db_name = "api";
$db_user = "root";
$db_pass = "root";

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("No connection :".mysqli_error());

if(isset($_POST['ok-login'])) {
    $username = trim(addslashes($_POST['username']));
    $password = trim(addslashes($_POST['password']));

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $sql = mysqli_query($connection,$query);
    $rows = mysqli_num_rows($sql);
    if($rows == 0) {
        $out = array('status' => 0, 'message' => "Invalid Login details");
    } else {
        $data = mysqli_fetch_assoc($sql);
        $out = array(
            'status' => 1,
            'message' => 'Login Successful',
            'data' => $data
        );
    }
    echo json_encode($out);
    
}

?>