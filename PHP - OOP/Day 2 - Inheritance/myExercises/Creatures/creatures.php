<?php
require_once 'Human.php';
require_once 'Robot.php';

$human = new Human('black', 'Jane');
$robot = new Robot('black', '#96853');

echo $human->work();
echo $robot->work();