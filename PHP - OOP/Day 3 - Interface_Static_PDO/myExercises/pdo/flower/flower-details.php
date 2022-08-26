<?php
require_once 'FlowerManager.php';
require_once 'Flower.php';

use Flowers\Utilities\FlowerManager;

if (!isset($_GET['id']) || !is_numeric($_GET['id']))
    die('The page you are looking for does not exist. Check the url for typos.');

$pageId = $_GET['id'];
$flowerDetails = new FlowerManager();
//var_dump($flowerDetails->find($pageId));
$flower = $flowerDetails->find($pageId);

echo '<strong>Name: </strong>' . $flower->get_flower() . '<br>';
