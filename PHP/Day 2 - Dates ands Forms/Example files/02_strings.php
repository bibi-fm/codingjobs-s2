<?php

// String functions
$myString = 'Here, take a beer.';

// Make it upper case
echo strtoupper($myString) . '<br>';

// Make it lower case
echo strtolower($myString) . '<br>';

// Find the position of a substring in a string
echo strpos($myString, 'beer') . '<br>';

// Substring : Retrieve one part of a string
echo substr($myString, 13) . '<br>';
echo substr($myString, 0, 4) . '<br>';

$lorem = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus nulla tempora perspiciatis fuga commodi accusantium ratione, nam voluptas illo magni doloremque, id deleniti quis quas earum voluptatum temporibus, excepturi eius.';

echo substr($lorem, 0, 30) . '...';

// Transform string into array
$string = 'Hello my favorite student is jack';
$myArray = explode(' ', $string);

echo '<pre>';
var_dump($myArray);
echo '</pre>';

// Transform array into string
$newString = implode(',', $myArray);
echo $newString;
