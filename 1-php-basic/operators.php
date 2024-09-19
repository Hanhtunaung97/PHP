<?php

$x=5;
$y=3;

// echo $x+$y ."\n";
// echo $x."dollars \n";
// echo $x +"2";

$arr=[
    "a"=>"aaa",
    "b"=>"bbb",
    "c"=>"ccc"
];
$arr1=[
    "a"=>"xxx",
    "b"=>"yyy",
    "z"=>"zzz",
    "x"=>"xxx"
];
$add=$arr + $arr1;
print_r($add);