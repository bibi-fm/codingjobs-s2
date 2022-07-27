<?php
// Open a previous session when you have the key : session_id('ql3r7ka0qbdd556hu5l2pfsra5');
session_start();

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

$_COOKIE['PHPSESSID'];
