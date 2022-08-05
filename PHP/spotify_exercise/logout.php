<?php

setcookie('email', '', time() - 3600);
// unset($_COOKIE['email']);
header('Location: login.php');
