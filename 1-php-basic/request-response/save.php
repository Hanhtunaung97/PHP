<?php
echo "<pre>";
// header("HTTP/1.1 404 NOT FOUND");
// header("Location:https://google.com");
header("Location:about.html");
print_r($_GET);
// print("Your are {$_GET['name']} and you was born in {$_GET['bd']}");

print_r($_POST);
print("You are ".$_POST["name"]);

print_r($_FILES);