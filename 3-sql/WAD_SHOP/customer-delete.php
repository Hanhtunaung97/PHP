<?php
require_once("./connection/db_connect.php");
print_r($_GET);
$id = $_GET["row_id"];

$sql = "DELETE FROM customers WHERE id=$id";

$query = mysqli_query($con, $sql);
if ($query) {
    header("Location:./customer-create-list.php");
}
