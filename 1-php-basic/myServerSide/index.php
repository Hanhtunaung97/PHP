<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to My Page</h1>
    <?php
    $products = [
        [
            "id" => 1,
            "name" => "apple",
            "price" => 600,
        ],
        [
            "id" => 2,
            "name" => "orange",
            "price" => 500,
        ],
        [
            "id" => 3,
            "name" => "mango",
            "price" => 900,
        ],
        [
            "id" => 4,
            "name" => "banana",
            "price" => 200,
        ],
        [
            "id" => 5,
            "name" => "lemon",
            "price" => 200,
        ],
    ]
    ?>
    <!-- <pre>
        <?php print_r($products)  ?>
    </pre> -->
    <?php foreach ($products as $product): ?>
        <div>
            <h3>
                <?= $product["name"] ?>
            </h3>
            <p><?= $product["price"] ?></p>
        </div>
        <hr>
    <?php endforeach; ?>
</body>

</html>