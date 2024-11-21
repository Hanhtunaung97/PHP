<?php
require_once("./connection/db_connect.php");

// print_r($_POST);
$id = $_POST["row_id"];
$student_id = $_POST["student_id"];
$batch_id = $_POST["batch_id"];

$sql = "UPDATE enrollments SET student_id=$student_id,batch_id=$batch_id WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ./enroll-list.php");
} else {
    var_dump($query);
}
