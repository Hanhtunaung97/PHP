<?php
echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
$folderName = "productPhotos";
$productFolder="products";
if (!is_dir($folderName)) {
    mkdir($folderName,0777,true);
}
if(!is_dir($productFolder)){
    mkdir($productFolder,0777,true);
}
$ext = pathinfo($_FILES["product_image"]["name"])["extension"];
$fileName = $folderName . "/" . uniqid() . "." . $ext;
if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $fileName)) {
    $_POST["product_photo"] = $fileName;
}
print_r($_POST);
  
$productFileName=$productFolder . "/" . uniqid() . "_" . $_POST["product_name"] . ".json" ;
$json=json_encode($_POST);
$fileStream=fopen($productFileName,"w");
fwrite($fileStream,$json);
fclose($fileStream);

touch($productFileName);
header("Location:./productList.php");
?>
