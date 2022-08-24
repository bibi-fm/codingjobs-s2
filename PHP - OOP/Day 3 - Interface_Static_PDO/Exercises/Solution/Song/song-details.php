<?php

if (!isset($_GET['id']) || !is_numeric($_GET['id']))
    die('Something wrong. Missing id');

$id = $_GET['id'];
$pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

$prep = $pdo->prepare('SELECT * 
FROM songs 
INNER JOIN artists ON songs.artist_id = artists.id WHERE songs.id = ?');
$prep->bindValue(1, $id);

$prep->execute();
$song = $prep->fetch(PDO::FETCH_ASSOC);

echo 'Title : ' . $song['title'] . '<br>';
echo 'Release date : ' . $song['release_date'] . '<br>';
echo 'Artist : ' . $song['name'] . '<br>';
