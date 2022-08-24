<?php 
$pdo = new PDO('mysql:host=localhost;port=45000;dbname=spotify_db', 'root', '');

$results = $pdo->query('SELECT * FROM songs');

$songs = $results->fetchAll(PDO::FETCH_ASSOC);

foreach ($songs as $song) {
    echo $song['title'] . '<br>';
}