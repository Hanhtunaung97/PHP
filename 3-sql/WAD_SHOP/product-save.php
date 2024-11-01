<?php
require_once("./connection/db_connect.php");
print_r($_POST);
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

$query = mysqli_query($con, $sql);
if ($query) {
  header("Location:./product-create-list.php");
}
var_dump($query);
echo $sql;
