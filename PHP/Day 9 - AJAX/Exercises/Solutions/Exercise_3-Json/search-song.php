<?php

// Retrieve search text 
$search = $_POST['search'];

$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
$query = "SELECT * FROM songs WHERE title LIKE '%$search%'";
$results = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($results, MYSQLI_ASSOC);

echo json_encode($songs, JSON_PRETTY_PRINT);
