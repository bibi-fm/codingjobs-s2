<?php

require_once 'User.php';
require_once 'External_Librairies/User.php';

$yan = new SimonClasses\Register\User();
$yan->do_something();

$margo = new External\User();
$margo->do_something();
