<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $message = json_encode(["error" => "POST method only"]);
    die($message);
}

if (empty($_FILES["photo"])) {
    $message = json_encode(["error" => "Please fill photo input fields"]);
    die($message);
}
$saveFolder = "photos";
if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777, true);
}
$ext = pathinfo($_FILES["photo"]["name"])["extension"];
$saveFile = $saveFolder . "/" . uniqid() . "." . $ext;
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $saveFile)) {
    $message = json_encode(["message" => "photo uploaded successfully"]);
    die($message);
}
