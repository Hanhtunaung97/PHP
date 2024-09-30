<?php
// touch("test.txt");
// mkdir("test",0777,true);
// var_dump(file_exists("test.txt"));
// var_dump(file_exists("tests.txt"));
// var_dump(is_dir("test"));
// var_dump(is_dir("tests"));
// var_dump(is_file("test.txt"));
// var_dump(is_file("test"));
// print_r(scandir("."));
// unlink("test.txt");
// rmdir("test");
// $fileName="test.txt";
// if(!file_exists($fileName)){
//     touch($fileName);
// }
// $fileStream=fopen($fileName,"r");
// echo fread($fileStream,1024);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgets($fileStream);
// echo fgets($fileStream);
// echo fgets($fileStream);
// echo fgets($fileStream);
// var_dump(feof($fileStream));
// while(feof($fileStream)==false){
//     echo fgets($fileStream);
// }
// fclose($fileStream);
// $fileStream=fopen($fileName,"a");
// fwrite($fileStream,"Hello World");
// fwrite($fileStream,"Hello spaces");
// fclose($fileStream);
// unlink("test.txt");
$content=file_get_contents("http://forex.cbm.gov.mm/api/latest");
    $obj=json_decode($content);
    var_dump($obj);