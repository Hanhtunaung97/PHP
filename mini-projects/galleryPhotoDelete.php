<?php
echo $_GET["file_name"];

$folderName="photos";
$fileName="$_GET[file_name]";

if(unlink($folderName."/".$fileName)){
    header("Location:galleryUploader.php");
}