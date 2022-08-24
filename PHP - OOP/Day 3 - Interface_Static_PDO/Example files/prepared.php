<?php

$pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

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
