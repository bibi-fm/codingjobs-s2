<?php

require_once 'Cat.php';

$cat = new Cat('pogo', 2, 'black', 'male', 'siamese');
$cat1 = new Cat('reg', 10, 'white', 'male', 'persian');
$cat2 = new Cat('grace', 8, 'blonde', 'female', 'siberian');
$cats = [$cat, $cat1, $cat2];

foreach ($cats as $cat) {
    echo 'Name: ' . $cat->name . '<br>';
    echo 'Age: ' . $cat->age . '<br>';
    echo 'Color: ' . $cat->color . '<br>';
    echo 'Sex: ' . $cat->sex . '<br>';
    echo 'Breed: ' . $cat->breed . '<br>';
    echo '<hr>';
}

/*$catInfo = $cat->get_info();

foreach ($catInfo as $info) {
    echo $info . '<br>';
}*/






