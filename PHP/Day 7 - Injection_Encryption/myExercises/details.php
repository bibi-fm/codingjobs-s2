<?php
$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
if ($conn) {
    $query = "SELECT * FROM songs WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $song = mysqli_fetch_assoc($result);
    echo $song['title'];
    echo $song['poster'];
    /*echo '<pre>';
    var_dump($table);
    echo '</pre>';*/
}
