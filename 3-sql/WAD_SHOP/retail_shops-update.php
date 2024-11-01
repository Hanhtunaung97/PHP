<?php
require_once("./connection/db_connect.php");
print_r($_GET);
print_r($_POST);

$id = $_POST["row_id"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$city = $_POST["city"];

$sql = "UPDATE retail_shops SET name='$name',phone='$phone',city='$city' WHERE id=$id";
$query = mysqli_query($con, $sql);
if ($query) {
    header("Location: ./retail_shops-create-list.php");
} else {
    var_dump($query);
}
