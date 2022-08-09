<?php
$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
$query = 'SELECT * FROM songs';
$results = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($results, MYSQLI_ASSOC);

if (isset($_POST['orderby'])) {
    $query = 'SELECT * FROM songs ORDER BY title ' . $_POST['orderby'];
    $results = mysqli_query($conn, $query);
    $songs = mysqli_fetch_all($results, MYSQLI_ASSOC);
}


foreach ($songs as $song) {
    echo $song['title'] . '<br>';
    echo $song['release_date'] . '<br>';
    echo '<hr>';
}
