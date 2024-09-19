<?php

$x="xxx";
const MY_NAME="han htun aung";
function run(){
    global $x;
    $y="yyy";
    // echo $x;
    // echo $y;
    // echo MY_NAME;
    static $z=4;
    echo $z;
    $z++;
}
run();
run();
run();
run();
// echo $x;
// echo $y;