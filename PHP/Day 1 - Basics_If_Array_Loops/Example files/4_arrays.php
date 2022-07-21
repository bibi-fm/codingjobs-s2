<?php

// Numerical Arrays

// Initialize an empty array
$movies = array();
$movies = [];

// Create array with values
/*$movies = array(
    'NightCrawler',
    'Dr. Strange',
    'Fear and Laughting in Las Vegas'
);*/

$movies = [
    'NightCrawler',
    'Dr. Strange',
    'Fear and Laughting in Las Vegas'
];

// Access an element of the array
echo $movies[1];

// Create a new element
$movies[3] = 'Interstellar';

// Create a new element at the end of the array
$movies[] = 'Bad Boys';

// Update/Override value
$movies[3] = 'Titanic';

// Remove an element
unset($movies[3]);

// Count numbers of elements
$nbElements = count($movies);

// Echo only works for strings. Use var_dump for arrays.
// echo '<pre>';
// var_dump($movies);
// echo '</pre>';

// Associative Arrays
$contactInformation = [
    'firstname' => 'Ricardo',
    'phone' => '+3527878941',
    'mail' => 'ricardo@gmail.com'
];

// Access an element
echo $contactInformation['firstname'];

// Add an element :
$contactInformation['height'] = 180;

// Multi-dimensional arrays
$contacts = [
    0 => [
        'firstname' => 'Ricardo',
        'phone' => '+3527878941',
        'mail' => 'ricardo@gmail.com'
    ],
    1 => [
        'firstname' => 'Margo',
        'phone' => '+3528478742',
        'mail' => 'margo@gmail.com'
    ]
];

echo $contacts[1]['firstname'];

echo '<pre>';
var_dump($contacts);
echo '</pre>';
