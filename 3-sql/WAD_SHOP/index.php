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
    <form action="./save.php" method="post">
        <input type="text" name="name" id="name" required>
        <input type="text" name="price" id="price" required>
        <input type="number" name="stock" id="stock" required>
        <button>Add</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>stock</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM products";
            $query = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($query)):
            ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><?= $row["stock"] ?></td>
                    <td> <a href="./edit.php?row_id=<?= $row["id"] ?>">Edit</a> | <a onclick="return confirm('are u sure to delete?')" href="./delete.php?row_id=<?= $row["id"] ?>">delete</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>