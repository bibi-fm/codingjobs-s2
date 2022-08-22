<?php

require_once 'CoffeeCup.php';

$myCoffee = new CoffeeCup(20, 'Malongo', 65); // 20 cl, brand Malongo, 65 °C

while ($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
    $quantityToSip = rand(1, 6);
    $myCoffee->sip($quantityToSip);
    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
}
