<?php
require_once 'CoffeeCup.php';
$myCoffee = new CoffeeCup('Expresso', 90, 30);


echo $myCoffee->get_quantity();
echo $myCoffee->get_brand();
echo $myCoffee->get_temperature();

echo $myCoffee->volume();

$quantity = $myCoffee->get_quantity();
echo $myCoffee->sip(3);
echo $myCoffee->refill($quantity);

echo $myCoffee->reHeat(3);
echo $myCoffee->coolDown(3);
