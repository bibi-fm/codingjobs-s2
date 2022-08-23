<?php
require_once 'Adventurer.php';
require_once 'Equipment.php';
require_once './Adventurers/Orc.php';
require_once './Adventurers/Elf.php';
require_once './Adventurers/Human.php';

$elf = new Elf('Haitham', 'elf');
$orc = new Orc('Yuir', 'orc');
$human = new Human('Laki', 'human');
$sword = new Equipment("Death Sword", "Sword", 10, 0, 0);


echo 'Atk: ' . $elf->attack . '<br>';
echo 'Atk Bonus(sword): ' .$sword->attackBonus . '<br>';

$elf->add_equipment($sword) . '<br>';

echo $elf->attack($orc) . '<br>';

echo $orc->attack($elf) . '<br>';


