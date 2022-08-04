<?php

// Remove white spaces from Left and Right
$email = ' simongmail.com  ';
$email = trim($email);

// Make sure the email is a valid one
$validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
// Then you can do things like : if($validEmail)
