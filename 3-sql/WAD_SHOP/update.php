<?php
// echo "<pre>";
$server_name = "localhost";
$user_name = "hha";
$password = "hanhtunaung97";
$db_name = "wad_shop";
$con = mysqli_connect($server_name, $user_name, $password, $db_name);

// var_dump($con);

if (!$con) {
    die("connection failed" . mysqli_connect_error());
}

// print_r($_POST);
$id = $_POST["row_id"];
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "UPDATE products SET name='$name',price=$price,stock=$stock WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location:index.php");
} else {
    var_dump($query);
}
