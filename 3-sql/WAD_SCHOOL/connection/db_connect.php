<?php
// echo "<pre>";
$server_name = "localhost";
$user_name = "hha";
$password = "hanhtunaung97";
$db_name = "wad_school";
$con = mysqli_connect($server_name, $user_name, $password, $db_name);

// var_dump($con);

if (!$con) {
    die("connection failed" . mysqli_connect_error());
}
