<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        echo "hello, I am php learner";
        ?>
    </h1>
    <p>
        <?= "this is expression"; ?>
    </p>
    <div>
        <?php if (true) : ?>
            <h2>This is true</h2>
        <?php else : ?>
            <h2>This is false</h2>
        <?php endif; ?>
    </div>
    <div>
        <?php
        $fruits = ["mango", "orange", "apple", "banana", "grape"]
        ?>
        <ul>
            <?php foreach ($fruits as $fruit): ?>
                <li>
                    <?php echo $fruit ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <pre>
            <?php
            // print_r($fruits)
            ?>
        </pre>
    </div>
</body>

</html>