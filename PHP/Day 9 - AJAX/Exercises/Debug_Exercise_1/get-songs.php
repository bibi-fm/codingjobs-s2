<?php

$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
$query = 'SELECT * FROM songs';
$results = mysqli_query($conn, $queri);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Order by
if (isset($_POST['orderby'])) {
    $query = 'SELECT * FROM songs ORDER BY title ' . $_POST['orderby'];
    $results = mysqli_query($conn, $query);
}

foreach ($songs as $song) {
    echo $songs['title'] . '<br>';
    echo $songs['release_date'] . '<br>';
    echo '<hr>';
}
