<?php

require_once 'FlowerManager.php';

use Flowers\Utilities\FlowerManager;

$flowerManager = new FlowerManager();
$flower = $flowerManager->find($_GET['id']);

echo 'Name : ' . $flower->get_name() . '<br>';
echo 'Price : ' . $flower->get_price() . '<br>';
