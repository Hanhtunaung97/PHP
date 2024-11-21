<?php
require_once("./connection/db_connect.php");
$student_id = $_POST["student_id"];
$batch_id = $_POST["batch_id"];


$sql = "INSERT INTO enrollments (student_id,batch_id)   VALUES ($student_id, $batch_id)";

$query = mysqli_query($con, $sql);
if ($query) {
    header("Location:./enroll-list.php");
}
var_dump($query);
echo $sql;
