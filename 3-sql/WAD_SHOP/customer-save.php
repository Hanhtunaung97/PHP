<?php
require_once("./connection/db_connect.php");
print_r($_POST);
$name = $_POST["name"];
$date_of_birth = $_POST["date_of_birth"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$sql = "INSERT INTO customers (name, date_of_birth, phone, gender) VALUES ('$name','$date_of_birth','$phone','$gender')";

$query = mysqli_query($con, $sql);
if ($query) {
    header("Location:./customer-create-list.php");
}
var_dump($query);
echo $sql;
