<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Page</title>
</head>

<body>
    <h2>Flowers List</h2>

    <?php
    require_once 'FlowerManager.php';

    use Flowers\Utilities\FlowerManager;

    $flowerManager = new FlowerManager();
    $arrayFlowers = $flowerManager->findAll();

    foreach ($arrayFlowers as $flower) {
        echo 'Name : ' . $flower->get_name() . '<br>';
        echo 'Price : ' . $flower->get_price() . '<hr>';
    }
    ?>


</body>

</html>