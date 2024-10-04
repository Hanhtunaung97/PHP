<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    $message = json_encode(["error" => "GET method only"]);
    die($message);
}

$photos = array_filter(scandir("photos"), fn($el) => $el != "." && $el != "..");
$arrayPhotos=array_values($photos);
print_r(json_encode($arrayPhotos));