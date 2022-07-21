<?php
// This is a single line comment

/*
    This a multiple
    line comments
*/

// 1 . Simple variables
$firstName = 'Simon';
$age = 30;
$height = 4.5;
$are_you_drank = false;

/*
    Rules :
    - name of the variable should start with a letter
    - name can contains numbers
    - only underscore, no other symbols
*/

// Display variables
echo "<h1>$firstName</h1>";
echo '<h1>' . $age . '</h1>';
echo $height;
echo '<br>';
echo $age;

// Display type of variable
echo gettype($firstName) . '<br>';

// Display content & type (debug)
var_dump($age);

// 2 . Arithmetic operators
$a = 5 + 2;
$a = 5 - 2;
$a = 5 / 2;
$a = 5 * 2;
$a = 5 % 2; // modulo : whats left of the division

// Incrementing
$a = 10;
$a = $a + 2;
$a += 2;

// Increment by one
$a = $a + 1;
$a++;

// Decrementing by one
$a = $a - 1;
$a--;

// 3. Concatenation : put two (or more) strings together
echo 'Hello ' . $firstName . '<br>';

// 4. Quotes
$drink = 'beer';

// Using single quotes (display as text)
echo 'I need a $drink<br>';
echo 'I need a ' . $drink . '<br>';

// Using double quotes
echo "I need a $drink<br>";

// 5. Escaping characters
echo 'It\'s easy !';
