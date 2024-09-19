<?php

$weight = (int) 200.45;
$weight = (string) 200.45;
// var_dump($weight);

$car = (object) [
    "id" => 1,
    "name" => "BMW",
    "type" => "sport",
    "model" => "M4"
];

// var_dump($car->model);

// type declaration
function area(int $w, int $b): int
{
    return $w * $b;
};
// print(area("a", "b"));
// print(area(13, 40));

function sum(array $num): int
{
    return array_sum($num);
}
print(sum([1,2,3,4,5,6]));
echo "\n";