<?php
require_once("./connection/db_connect.php");

// print_r($_POST);
$id = $_POST["row_id"];
$name = $_POST["name"];
$gender_id = $_POST["gender_id"];
$date_of_birth = $_POST["date_of_birth"];
$pocket_money = $_POST["pocket_money"];

$sql = "UPDATE students SET name='$name',gender_id=$gender_id,date_of_birth='$date_of_birth',pocket_money=$pocket_money WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ./student-list.php");
} else {
    var_dump($query);
}
