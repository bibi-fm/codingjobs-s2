<?php

require_once 'User.php';
require_once 'External_Librairies/User.php';

use SimonClasses\Register\User;
use External\User as ExternalUser;

$yan = new User();
$yan->do_something();

$margo = new ExternalUser();
$margo->do_something();
