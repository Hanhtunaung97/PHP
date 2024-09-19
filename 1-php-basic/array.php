<?php
// var_dump(stream_get_wrappers());
// index array
// $arr = array("a", "b", "c", "b", "d", "e", "f", "a");
// $arr1 = ["x", "y", "z"];
// $num = [2, 4, 6, 8, 20, 34, 13, 5, 7];
// $drink = ["coffee", "tea", "milk"];
// $json = file_get_contents("https://jsonplaceholder.typicode.com/todos/1",true, stream_context_get_default());
// echo $json;
// echo "\n";
// $aso=json_decode($json,true);
// echo $aso['title'];
// echo "\n";
// $r = array_map(fn($el) => $el * 2, $num);
// $r = array_filter($num, fn($el) => $el <= 10);
// $r=array_reduce($num,fn($pv,$cv)=>$pv+$cv,0);
// print_r($r);
// print_r($num);
// array to string
// print_r(implode("___",$drink));
// string to array
// print_r(explode(" ","han htun aung"));
// shuffle($arr);
// $r=array_reverse($arr);
// $r=array_unique($arr);
// print_r(join("--",$arr1));
// print_r($r);
// print_r($arr1);
// print_r(range(0,100,10));
// list($x,$y,$z)=$drink;
// print_r($z);
// print_r(in_array("d",$arr));
// print_r(in_array("w",$arr));
// print_r(current($arr));
// print_r(end($arr));
// print_r(array_slice($arr,1,4));
// print_r(array_splice($arr,1,3));
// print_r($arr);
// print_r(array_rand($arr,3));
// foreach(array_rand($arr,5) as $x){
//     echo $arr[$x];
//     echo"\n";
// }
// // print_r($arr[array_rand($arr,1)]);
// print_r(array_product($num));
// print_r(array_sum($num));
// print_r(array_chunk($arr,2));
// $result=array_merge($arr,$arr1);
// print_r($result);
// print_r($arr1);
// array_pop($arr);
// array_pop($arr);
// array_shift($arr1);
// array_shift($arr1);
// print_r($arr1);
// associate array

// $assoc = array(
//     "myName" => "han htun aung",
//     "myAge" => 26,
//     "myJob" => ["eat", "sleep", "repeat"],
//     "Gf" => true,
//     "currentJob" => null,
// );
// print(json_encode($assoc));
// print_r(array_keys($assoc));
// print_r(array_values($assoc));
// print_r(array_search(26,$assoc));
// print_r(array_key_exists("Gf",$assoc));
// print_r($assoc);
// print($assoc["myName"]);
// print_r($assoc["myJob"]);
// print($assoc["myAge"]);

// print_r($arr);
// print_r($arr1);
// print("$arr[0]");
// print("$arr[2]");
// print($arr[1]);

// $x=[];
// array_push($x,"a");
// array_push($x,"b");
// array_push($x,"c");
// array_unshift($x,"x");
// array_unshift($x,"y");
// array_unshift($x,"z");
// $x[0]="a";
// $x[1]="b";
// $x[2]="c";
// $x["name"]="han htunaung";
// $x["age"]=27;
// $x["job"]="no";
// print_r($x);
$GLOBALS["MY_NAME"]="TH";
print_r($GLOBALS);
function run(){
    return "my name is ".$GLOBALS["MY_NAME"];
}
print(run());