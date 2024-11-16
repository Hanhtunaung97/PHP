<?php
require_once("./connection/db_connect.php");
print_r($_POST);
// die();
$name = $_POST["name"];
$gender_id = $_POST["gender_id"];
$date_of_birth = $_POST["date_of_birth"];
$pocket_money = $_POST["pocket_money"];

$sql = "INSERT INTO students (name,gender_id,date_of_birth,pocket_money) VALUES ('$name',$gender_id,'$date_of_birth',$pocket_money)";

$query = mysqli_query($con, $sql);
if ($query) {
  header("Location:./student-list.php");
}
var_dump($query);
echo $sql;
