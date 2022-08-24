<?php

require_once 'LivingBeing.php';
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'IWork.php';
require_once 'Human.php';
require_once 'Robot.php';


$human = new Human('Jane', 'black', 'female');
$human1 = new Human('John', 'brown', 'male');
$robot = new Robot(25634, 'grey');
$robot1 = new Robot(54742, 'orange');


$livingBeing = [$human, $robot, $human1, $robot1];

foreach ($livingBeing as $key => $obj) {
    // The KEY will print int(0) and not the object itself
    /*echo '<pre>';
    var_dump($value);
    echo '</pre>';*/
    $obj->work();
}
