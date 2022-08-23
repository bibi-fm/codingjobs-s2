<?php

require_once 'Equipment.php';
require_once 'Character.php';

$legolas = new Character('Legolas', 'Elf');

$sword = new equipment("Death Sword", "Sword", 10, 0, 0);
// var_dump($sword);

$legolas->add_equipment($sword);


$legolas->display_equipment();

echo '<pre>';
var_dump($legolas);
echo '</pre>';
