<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $message = json_encode(["error" => "POST method only"]);
    die($message);
}
if (empty($_POST["amount"]) || empty($_POST["from_currency"]) || empty($_POST["to_currency"])) {
    $message = json_encode(["error" => "Please fill all input fields"]);
    die($message);
}

$JsonRates = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$RateObj = json_decode($JsonRates, true);
$Rates = $RateObj["rates"];
$amount = $_POST["amount"];
$fromName = $_POST["from_currency"];
$toName = $_POST["to_currency"];
$fromRate = str_replace(",", "", $Rates[$fromName]);
$toRate = str_replace(",", "", $Rates[$toName]);
$toAmount = ($amount * $fromRate) / $toRate;
$_POST["to_amount"] = round($toAmount,2) . " " . $toName;
echo json_encode($_POST);
