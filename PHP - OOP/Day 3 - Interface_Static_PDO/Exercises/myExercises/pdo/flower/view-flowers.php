<?php
require_once 'FlowerManager.php';
require_once 'Flower.php';

$flowers = new FlowerManager;
$findFlowers = $flowers->findall();


/*echo '<pre>';
var_dump($findFlowers);
echo '</pre>';*/

foreach ($findFlowers as $flower) {
    echo '<strong>Name:</strong> ' . $flower->get_flower() . '<br>';
    echo '<hr>';
}


//DELETED FOR LOOP CODE
//echo '<strong>Name:</strong> ' . $flower['name'] . '<br>';
//echo '<strong>Price:</strong> ' . $flower['price'] . '<br>';
//echo '<strong>Price:</strong> ' . $flower->price . '<br>';
