<?php

/*

    PDO - PHP Data Object

    PDO is a abstraction layer to access/manipulate databases.
    It can handle around 12 different types of DB.

    PDO is using OOP.

*/

// 1. Connect to the DB
$pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

// 2. Create the query and execute
// $query = 'DELETE FROM songs WHERE id = 5';
// $results = $pdo->exec($query);
// exec() only return the number of lines that are affected

// var_dump($results);
// If you have a different port : new PDO('mysql:host=localhost;db_name=spotify_db;port=3307', 'root', '');

$results = $pdo->query('SELECT * FROM songs');
// query() retrieves a set of records that needs to be fetched
$songs = $results->fetchAll(PDO::FETCH_ASSOC);

foreach ($songs as $song) {
    echo $song['title'] . '<br>';
}

echo '<pre>';
var_dump($songs);
echo '</pre>';

/*

Prepared statements

Pros : 
    - Safety
    - Better performance
    - Usefull when insert multiple records

*/

// Assume/Image there is a form
$email = $_POST['email'];
$password = $_POST['password'];

// $query = "SELECT *
// FROM users
// WHERE email = ?
// AND password = ?";

// $prep = $pdo->prepare($query);
// $prep->bindValue(1, $email);
// $prep->bindValue(2, $password);

$query = "SELECT *
FROM users
WHERE email = :email
AND password = :password";

$prep = $pdo->prepare($query);
$prep->bindValue(':email', $email);
$prep->bindValue(':password', $password);

$prep->execute();
$users = $prep->fetchAll(PDO::FETCH_ASSOC);

// Close the connection
$pdo = null;
