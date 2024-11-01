<?php
require_once("./connection/db_connect.php");

// print_r($_POST);
$id = $_POST["row_id"];
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "UPDATE products SET name='$name',price=$price,stock=$stock WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ./product-create-list.php");
} else {
    var_dump($query);
}
