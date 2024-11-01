<?php
echo "<pre>";
$server_name = "localhost";
$user_name = "hha";
$password = "hanhtunaung97";
$db_name = "wad_shop";
$con = mysqli_connect($server_name, $user_name, $password, $db_name);

var_dump($con);

if (!$con) {
  die("connection failed" . mysqli_connect_error());
}

print_r($_POST);
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

$query = mysqli_query($con, $sql);
if ($query) {
  header("Location:index.php");
}
var_dump($query);
echo $sql;
