<?php

/*

JSON :
It's a data/file format which allow
to store datas. Most of the time,
the datas represents an object or an array.

It's really easy to read and the syntax
is simple. It's lightweight and allow
fast data transfer.

Syntax : 
- {...} : Curly braces represents an object
- [...] : Square brackets represents an array
- JSON understands String, Boolean and Numbers


SERIALIZATION
Serialization is the process of converting an object/array into a string.

DESERIALIZATION
Deserialization is the process of converting a string into an object/array.


*/

require_once 'Movie.php';

// 1. Create an object
$titanic = new Movie('Titanic', 1997);
// 2. Use serialization to convert the object into JSON String.
$json = json_encode($titanic, JSON_PRETTY_PRINT);

echo $json;

// echo '<pre>';
// var_dump($json);
// echo '</pre>';
