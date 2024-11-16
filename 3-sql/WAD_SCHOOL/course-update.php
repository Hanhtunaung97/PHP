<?php
require_once("./connection/db_connect.php");

// print_r($_POST);
$id = $_POST["row_id"];
$title = $_POST["title"];
$short = $_POST["short"];
$fee = $_POST["fee"];

$sql = "UPDATE courses SET title='$title',short='$short',fee=$fee WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ./course-create-list.php");
} else {
    var_dump($query);
}
