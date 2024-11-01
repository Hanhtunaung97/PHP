<?php
require_once("./connection/db_connect.php");
$id = $_GET["row_id"];
$sql = "DELETE FROM retail_shops WHERE id=$id";
$query = mysqli_query($con, $sql);
if ($query) {
    header("location: retail_shops-create-list.php");
} else {
    var_dump($query);
}
