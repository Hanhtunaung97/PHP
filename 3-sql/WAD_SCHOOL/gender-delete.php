<?php
require_once("./connection/db_connect.php");
print_r($_GET);

$id = $_GET["row_id"];

$sql = "DELETE FROM gender WHERE id=$id";
echo $sql;

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location:./gender-create-list.php");
}
