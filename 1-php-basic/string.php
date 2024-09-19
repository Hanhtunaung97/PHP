<?php

$age='26 years';

// echo "My name is $name and I am $age old";
// echo $age;

$null=null;
$boolean=true;
$boolean1=false;
// echo $null;
// echo $boolean;
// echo $boolean1;

$myName="han htun aung";
$text="xxxabczysxxx";
print_r(explode(" ",$myName));
echo "\n";
print(implode("--",["x","y","z"]));
echo "\n";
echo trim($text,"x");
echo "\n";
echo str_pad($text,10,99,STR_PAD_BOTH);
echo "\n";
echo strlen($myName);
echo "\n";
echo str_word_count($myName);
echo "\n";
echo strrev($myName);
echo "\n";
echo ucfirst($myName);
echo "\n";
echo ucwords($myName);
echo "\n";
echo strtolower($myName);
echo "\n";
echo strtoupper($myName);
echo "\n";
echo strpos($myName,"aung");
echo "\n";
echo str_replace("htun","htoo",$myName);
echo "\n";
echo substr($myName,0,4);
echo "\n";
echo md5($myName);
echo "\n";
echo password_hash($myName,PASSWORD_DEFAULT);
echo "\n";
echo password_hash($myName,PASSWORD_BCRYPT);
echo "\n";
echo password_hash($myName,PASSWORD_BCRYPT,["cost"=>10]);
echo "\n";
echo password_hash($myName,PASSWORD_BCRYPT,["cost"=>20]);
