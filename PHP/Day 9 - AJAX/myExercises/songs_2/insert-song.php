<?php
$title = $_POST['title'];
$releaseDate = $_POST['release-date'];
$poster = $_POST['poster'];
$artist = $_POST['artist'];
$category = $_POST['category'];
if (!empty($title) && !empty($releaseDate) && !empty($poster) && !empty($artist) && !empty($category)) {
    echo "<h4 style='color: green';>All fields have been completed.</h4>";

    echo $title . "<br>";
    echo $releaseDate . "<br>";
    echo "<img src='$poster'>" . "<br>";
    echo $artist . "<br>";
    echo $category . "<br>";

    $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');

    $query = "INSERT INTO songs (title, release_date, poster, artist_id, categ_id)
    VALUES('$title', '$releaseDate', '$poster', '$artist','$category')";

    $results = mysqli_query($conn, $query);
    //is_numeric($artist);
    //is_numeric($category);
} else {
    echo "<h4 style='color: red;'>All fields are mandatory!<h4>";
}
