<?php
require_once 'Character.php';
require_once 'Equipment.php';

$elf = new Character('Haitham', 'human');
$sword = new Equipment("Death Sword", "Sword", 10, 0, 0);

echo 'Atk: ' . $elf->attack . '<br>';

echo 'Atk Bonus(sword): ' .$sword->attackBonus . '<br>';

$elf->add_equipment($sword) . '<br>';
