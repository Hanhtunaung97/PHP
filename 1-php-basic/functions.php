<?php

// function area($x,$y){
//     return $x*$y;
// }
$area = fn($x, $y) => $x * $y;
// print($area(22, 54));

// echo strtoupper("hello i am han htun aung");
// print_r(explode(" ","han htun aung is good"));
// echo str_replace("htun","zzz","han htun aung");

// for ($i = 1; $i < 10; $i++) {
// echo "loop " . $i . "\n";
// }
$fruits = ["mango", "orange", "apple", "banana", "grape"];

for ($i = 0; $i < count($fruits); $i++) {
    echo $i . "---" . $fruits[$i] . "\n";
}
foreach ($fruits as $fruit) {
    echo $fruit . " \n";
}
