<?php

require_once 'LivingBeing.php';
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Human.php';
require_once 'Robot.php';

$garfield = new Cat('Garfield', 'Orange', 'Male', 4);
$garfield->meow();

$snoopy = new Dog('Snoopy', 'Grey', 'Male', 3);
$snoopy->bark();

$jackbot = new Robot('j150', 'Silver');
$jackbot->work();

$simon = new Human('Simon', 'brown', 'Male');
$simon->work();
$simon->talk();
