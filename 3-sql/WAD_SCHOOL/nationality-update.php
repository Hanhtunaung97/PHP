<?php
require_once("./connection/db_connect.php");

// print_r($_POST);
$id = $_POST["row_id"];
$nation = $_POST["nation"];
$nation_code = $_POST["nation_code"];

$sql = "UPDATE nationality SET '$nation='$nation',nation_code='$nation_code' WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ./nationality-create-list.php");
} else {
    var_dump($query);
}
