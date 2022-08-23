<?php

require_once 'Animal.php';


$cat = new Cat(4, 'ginger', 'male', 'tart');
$dog = new Dog(4, 'yellow', 'female', 'lumi');


echo $cat->get_legs() . '<br>';
echo $cat->get_color() . '<br>';
echo $cat->get_gender() . '<br>';
echo $cat->get_name() . '<br>';

echo $dog->get_legs() . '<br>';
echo $dog->get_color() . '<br>';
echo $dog->get_gender() . '<br>';
echo $dog->get_name() . '<br>';

/*foreach ($cat as $key => $val) {
    echo "$key: $val <br>";
}
foreach ($dog as $key => $val) {
    echo "$key: $val <br>";
}*/
