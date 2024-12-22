<?php

echo "<pre>";
$serverName = "localhost";
$username = "hha";
$password = "hanhtunaung97";
$dbName = "wad_school";

$con = new mysqli($serverName, $username, $password, $dbName);
// print_r($con);
$sql = "SELECT * FROM courses";

$query = $con->query($sql);
// print_r($query);

$first = $query->fetch_object();
print_r($first);
echo $first->title;
