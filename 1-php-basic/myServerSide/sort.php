<?php

$arr1 = ["x", "y", "z","B","E",1,5,2.4,5.6,"%","+","-","!"];
// sort($arr1);
// rsort($arr1);
// print_r($arr1);

$assoc = array(
    "myName" => "han htun aung",
    "myAge" => 26,
    "myJob" => "EAT",
    "Gf" => 1,
    "currentJob" => null,
);
// asort($assoc);
// ksort($assoc);
// arsort($assoc);
krsort($assoc);
print_r($assoc);

