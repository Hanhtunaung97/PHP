<?php
// echo "<pre>";
$server_name = "localhost";
$user_name = "hha";
$password = "hanhtunaung97";
$db_name = "wad_shop";
$con = mysqli_connect($server_name, $user_name, $password, $db_name);

// var_dump($con);

if (!$con) {
    die("connection failed" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET["row_id"];
    $sql = "SELECT * FROM products WHERE id=$id";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
    ?>
    <form action="./update.php" method="post">
        <input type="hidden" name="row_id" id="row_id" value="<?= $row['id'] ?>" required>
        <input type="text" name="name" id="name" value="<?= $row['name'] ?>" required>
        <input type="text" name="price" id="price" value="<?= $row['price'] ?>" required>
        <input type="number" name="stock" id="stock" value="<?= $row['stock'] ?>" required>
        <button type="submit">update</button>
    </form>
</body>

</html>