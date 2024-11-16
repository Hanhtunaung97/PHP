<?php
require_once("./connection/db_connect.php");
print_r($_POST);
// die();
$type = $_POST["type"];

$sql = "INSERT INTO gender (type) VALUES ('$type')";

$query = mysqli_query($con, $sql);
if ($query) {
  header("Location:./gender-create-list.php");
}
var_dump($query);
echo $sql;
