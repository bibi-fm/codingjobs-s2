<?php
$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
if ($conn) {
    $query = "SELECT * FROM songs";
    $results = mysqli_query($conn, $query);
    $songs = mysqli_fetch_all($results, MYSQLI_ASSOC);
    foreach ($songs as $song) {
       echo '<strong>Title: </strong>' . $song['title'] . "<br>";
       echo '<strong>Date of release: </strong>' . $song['release_date'] . "<br>";
       echo '<hr>';
    }
}

// echo '<pre>';
// var_dump($songs);
// echo '</pre>';
