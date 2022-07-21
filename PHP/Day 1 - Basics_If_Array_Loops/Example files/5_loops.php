<?php

/* LOOPS

In programming, a loop repeats a specific block of code as many times as you want.

When to use a loop : Do I repeat the same thing many times ? If yes, else dt use it.

*/

// 1. For Loop
for ($i = 0; $i < 10; $i++) {
    //echo $i;
}

// For loop is used to execute code a specific number of times.

// 2. While

$a = 10;

while ($a < 10) {
    //echo $a;
    $a++;
}

// While loop is used to execute code as long as a condition is true

// 3. Do...While

$a = 10;

do {
    //echo $a;
    $a++;
} while ($a < 10);

// Do While is used to execute code at least once, then the rest depends on the condition

// For...each : Iterate through an array
$movies = array(
    0 => "NightCrawler",
    1 => "Snatch", // HERE : $key = 1 / $value = "Snatch"
    2 => "Blues Brothers"
);

// Foreach will provide the current $key and $value
foreach ($movies as $key => $value) {
    echo $key . " " . $value . '<br>';
}

// You can change the name of those two default variables
foreach ($movies as $position => $title) {
    // echo $position . " " . $title . "<br>";
}

// You can skip to grab the key if not necessary
foreach ($movies as $value) {
    // echo $value . "<br>";
}
