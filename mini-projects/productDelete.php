<?php
print_r($_GET);
$folderName="products";
$fileName=$folderName."/".$_GET["file_name"];
$content=file_get_contents($fileName);
$obj=json_decode($content);
// echo $content;
print_r($obj);
if(unlink($obj->product_photo)){
   if(unlink($fileName)){
    header("Location:productList.php");
   }
}