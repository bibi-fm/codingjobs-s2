<?php
require_once 'FlowerManager.php';
require_once 'Flower.php';

$flowers = new FlowerManager;
$findFlowers = $flowers->find_all();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
</head>

<body>
    <?php foreach ($findFlowers as $flower) : ?>
        <p>
            <strong>Name:</strong><?= $flower->get_flower() ?>
        </p>

        <a href="flower-details.php?id=<?= $flower->id; ?>">See More</a>
        <hr>
    <?php endforeach ?>
</body>

</html>