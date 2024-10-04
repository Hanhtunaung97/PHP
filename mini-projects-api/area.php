<?php

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $message = json_encode(["error" => "POST method only"]);
    die($message);
}

if (empty($_POST["width"]) || empty($_POST["breadth"])) {
    $message = json_encode(["error" => "Please fill both width and breadth fields"]);
    die($message);
}

$breadth = $_POST["breadth"];
$width = $_POST["width"];
$area = $width * $breadth;
$_POST["area"] = $area . " sqft";

echo json_encode($_POST);
