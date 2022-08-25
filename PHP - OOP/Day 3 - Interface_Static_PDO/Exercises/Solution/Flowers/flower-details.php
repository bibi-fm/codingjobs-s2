<?php

require_once 'FlowerManager.php';

$flowerManager = new FlowerManager();
$flower = $flowerManager->find($_GET['id']);

echo 'Name : ' . $flower->get_name() . '<br>';
echo 'Price : ' . $flower->get_price() . '<br>';
