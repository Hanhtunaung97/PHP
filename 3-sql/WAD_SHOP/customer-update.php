<?php
require_once("./connection/db_connect.php");

$id = $_POST["row_id"];
$name = $_POST["name"];
$date_of_birth = $_POST["date_of_birth"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];

$sql = "UPDATE customers SET name='$name',date_of_birth='$date_of_birth',phone='$phone',gender='$gender' WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ./customer-create-list.php");
} else {
    var_dump($query);
}
