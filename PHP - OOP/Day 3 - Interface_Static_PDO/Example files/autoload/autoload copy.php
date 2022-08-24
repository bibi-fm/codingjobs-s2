<?php

function projectAutoload($className)
{
    require_once "classes/$className.php";
}

// Loads automatically the class you need
// By default, it looks inside the same folder
spl_autoload_register('projectAutoload');

$myRobot = new Robot(1122, 'Silver');
var_dump($myRobot);
