<?php

require_once 'Cat.php';

$cat = new Cat('pogo', 2, 'black', 'male', 'siamese');
$cat1 = new Cat('reg', 10, 'white', 'male', 'persian');
$cat2 = new Cat('grace', 8, 'blonde', 'female', 'siberian');


var_dump($cat->get_info());
var_dump($cat1->get_info());
var_dump($cat2->get_info());







