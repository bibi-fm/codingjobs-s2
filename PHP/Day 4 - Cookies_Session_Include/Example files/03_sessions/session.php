<?php

// SESSIONS

/* 
First : you need to start the session.
If it's the first time, the server creates a new session.
If you already opened a session before, it will try to open this one.
*/

// First thing to do (before any HTML tags)
session_start();

// Add an element to the session : 
$_SESSION['cart'] = 'Tshirt';

// Remove an element :
// unset($_SESSION['cart']);

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
