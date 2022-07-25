<?php

/* 

FUNCTIONS

Functions are block of code that you can reuse many times.
Functions can either return values, or simply perfom an action.

*/

// Declare a function
function hello_world()
{
    // Code to be exectued when we call the function
    echo 'Hello, world !<br>';
}

// Call a function
hello_world();
// hello_world();
// hello_world();

// Function with return value
function hello()
{
    // Return the message
    return 'Hello<br>';

    // Never going to be executed :
    echo 'yoyoyoyoyoyoyoyyo';
}

// Display the result
echo hello();
// Save the result into a variable
$message = hello();

// Scope : visibility of your variables
$number = 10;

function example()
{
    // This doesnt work :
    echo 'My number is ' . $number;
}

example();


//This doesnt work either : 
function example2()
{
    $y = 10;
}

echo $y;

// Function with arguments
function greetings($firstName)
{
    echo 'Hello, welcome to my website ' . $firstName . '<br>';
}

greetings('simon');
greetings('fabio');

$name = 'paul';
greetings($name);


function multiplyByTwo($x = 1)
{
    return $x * 2;
}

multiplyByTwo(3);
multiplyByTwo();
