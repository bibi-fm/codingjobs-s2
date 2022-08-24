<?php

$pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

$results = $pdo->query('SELECT * FROM songs');
$songs = $results->fetchAll(PDO::FETCH_ASSOC);
$pdo = null;

foreach ($songs as $s) {
    echo 'Title : ' . $s['title'] . '<br>';
    echo 'Date : ' . $s['release_date'] . '<br>';
    echo '<a href="song-details.php?id=' . $s['id'] . '">Detail page</a>';
    echo '<hr>';
}
