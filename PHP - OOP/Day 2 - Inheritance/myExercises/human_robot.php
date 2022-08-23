<?php
require_once 'Creature.php';


$human = new Human('white', 'Jon');
$robot = new Human('grey', '#8569');

echo $human->get_name();
echo $robot->get_id();