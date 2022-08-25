<?php

// Deserialization

// Step 1 : get the content of the JSON
$jsonFile = file_get_contents("movie.json");

// Step 2 : Deserialize the JSON
$myObjects = json_decode($jsonFile);

// Step 3 : Can access object properties
echo '<pre>';
var_dump($myObjects);
echo '</pre>';

foreach ($myObjects as $movie) {
    echo "Title : " . $movie->title . '<hr>';
}
