<?php
require_once 'Adventurer.php';
require_once 'Equipment.php';
require_once './Adventurers/Orc.php';
require_once './Adventurers/Elf.php';
require_once './Adventurers/Human.php';
require_once '../Animals/animals.php';

$elf = new Elf('Haitham', 'elf');
$orc = new Orc('Yuir', 'orc');
$human = new Human('Laki', 'human');
$sword = new Equipment("Death Sword", "Sword", 10, 0, 0);


//array items
$human1 = new Human('Jon', 'human');
$human2 = new Human('Jane', 'human');
$cat = new Cat(4, 'ginger', 'male', 'Tarta');
$cat1 = new Cat(4, 'yellow', 'female', 'Lumi');
$cat2 = new Cat(4, 'gold', 'female', 'Chilu');
$dog = new Dog(4, 'ginger', 'male', 'Tarta');
$dog1 = new Dog(4, 'yellow', 'female', 'Lumi');
$dog2 = new Dog(4, 'gold', 'female', 'Chilu');

echo 'Atk: ' . $elf->attack . '<br>';
echo 'Atk Bonus(sword): ' .$sword->attackBonus . '<br>';

$elf->add_equipment($sword) . '<br>';

echo $elf->attack($orc) . '<br>';

echo $orc->attack($elf) . '<br>';

$beings =[$human,$human1,$human2,$cat,$cat1,$cat2,$dog,$dog1,$dog2];
echo '<pre>';
var_dump($beings);
echo '</pre>';

foreach ($beings as $key => $value) {
    # code...
}
