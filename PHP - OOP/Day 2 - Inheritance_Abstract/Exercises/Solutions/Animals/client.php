<?php

require_once 'LivingBeing.php';
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Human.php';
require_once 'Robot.php';

// $jackbot = new Robot('j150', 'Silver');
// $jackbot->work();

$garfield = new Cat('Garfield', 'Orange', 'Male', 4);
$snoopy = new Dog('Snoopy', 'Grey', 'Male', 3);
$simon = new Human('Simon', 'brown', 'Male');

// Create an array of 3 objects
$livingBeing = array($garfield, $snoopy, $simon);

// Loop through the array / $value is an object
foreach ($livingBeing as $key => $value) {
    $value->make_noise();
}
