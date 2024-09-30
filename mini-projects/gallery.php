<?php
echo "<pre>";
print_r($_FILES);
// $arr=explode(".",$_FILES["upload"]["name"]);
// print_r($arr);
// print(end($arr));
// print_r(pathinfo($_FILES["upload"]["name"]))

$saveFolder = "photos";
if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777, true);
}
$error = false;
$namePath = $_FILES["upload"]["name"];
foreach ($namePath as $key => $name) {
    $ext = pathinfo($name)["extension"];
    $saveFile = $saveFolder . "/" . uniqid() . "." . $ext;
    if (!move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFile)) {
        $error = true;
    }
}
if ($error === false) {
    header("Location:galleryUploader.php");
}
// $ext = pathinfo($_FILES["upload"]["name"])["extension"];
// $saveFile = $saveFolder . "/" . uniqid() . "." . $ext;
// if (move_uploaded_file($_FILES["upload"]["tmp_name"], $saveFile)) {
//     header("Location:galleryUploader.php");
// }
?>

<!-- <?php require_once("./template/header.php") ?> -->
<!-- <?php require_once("./template/sidebar.php") ?> -->

<!-- <?php require_once("./template/footer.php") ?> -->