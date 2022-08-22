<?php
require_once 'HTMLString.php';

$hello = new HTMLString('Hello');

//$hello->setString('Hi'); 
$star = new HTMLString('Sirius');
echo $star->getString() . '<br>';
echo $star->getBoldString() . '<br>';
echo $star->getItalicString() . '<br>';
echo $star->getItalicBoldString() . '<br>';


//var_dump($hello);