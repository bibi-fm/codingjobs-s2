<?php

require_once 'FlowerAPIManager.php';
$flowerManager = new FlowerAPIManager();
echo $flowerManager->findAll();
