<?php
require_once("./connection/db_connect.php");
print_r($_POST);
$name = $_POST["name"];
$phone = $_POST["phone"];
$city = $_POST["city"];
$sql = "INSERT INTO retail_shops(name,phone,city) VALUES ('$name','$phone','$city')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("location: retail_shops-create-list.php");
} else {
    var_dump($query);
}
