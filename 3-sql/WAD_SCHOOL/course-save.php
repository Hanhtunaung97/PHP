<?php
require_once("./connection/db_connect.php");
print_r($_POST);
// die();
$title = $_POST["title"];
$short = $_POST["short"];
$fee = $_POST["fee"];

$sql = "INSERT INTO courses (title,short,fee) VALUES ('$title','$short',$fee)";

$query = mysqli_query($con, $sql);
if ($query) {
  header("Location:./course-create-list.php");
}
var_dump($query);
echo $sql;
