<?php
require_once 'FlowerManager.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id']))
    die('The page you are looking for does not exist. Check the url for typos.');

$id = $_GET['id'];
$pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');

$query = "SELECT * FROM flowers WHERE id = :id";

$prep = $pdo->prepare($query);
$prep->bindValue(':id', $id);

$prep->execute();
$flower = $prep->fetch(PDO::FETCH_ASSOC);

echo $flower['name'];

$flowerDetails = new FlowerManager();
$flowerDetails->find($id);
var_dump($flowerDetails);