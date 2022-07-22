<?php

// Set the timezone
date_default_timezone_set('Europe/Luxembourg');

/*
    Timestamps
    number of seconds to identify a specific date

    Number of seconds between a specific date and the 1st January 1970
    Today's date : 22/07/2022 11h24
    Today's timestamp : 1625822707

*/

// Display a date in a nice format : date() function

echo date('d/m/Y') . '<br>';
echo date('m-d-Y') . '<br>';

// Day's number
echo date('d') . '<br>';

// Return today month number
echo date('m') . '<br>';
echo date('M') . '<br>';

// With hours/minutes/seconds
echo date('d/m/Y H:i:s') . '<br>';

// Retrieve/Convert a date, or a string, into a timestamp
echo strtotime('now') . '<br>';
echo strtotime('next Thursday') . '<br>';
echo strtotime('+3 days') . '<br>';
echo strtotime('19 October 2000') . '<br>';

// You can use date() function with timestamp
$timestamp = 971906400;
echo date('d/m/Y H:i:s', $timestamp) . '<br>';