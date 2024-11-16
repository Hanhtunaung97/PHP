<?php
require_once("./connection/db_connect.php");

// print_r($_POST);
$id = $_POST["row_id"];
$type = $_POST["type"];


$sql = "UPDATE gender SET type='$type' WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ./gender-create-list.php");
} else {
    var_dump($query);
}
