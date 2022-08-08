<?php

$errors = false;

if (empty($_POST['title'])) {
    echo '<p class="error">Title is mandatory</p>';
    $errors = true;
}

if (empty($_POST['release_date'])) {
    echo '<p class="error">Release is mandatory</p>';
    $errors = true;
}

if (empty($_POST['poster'])) {
    echo '<p class="error">Poster is mandatory</p>';
    $errors = true;
}

if (empty($_POST['artist_id'])) {
    echo '<p class="error">Artist is mandatory</p>';
    $errors = true;
}

if (empty($_POST['categ_id'])) {
    echo '<p class="error">Title is mandatory</p>';
    $errors = true;
}

if ($errors == false) {
    $title = strip_tags(trim($_POST['title']));
    $release_date = strip_tags(trim($_POST['release_date']));
    $poster = strip_tags(trim($_POST['poster']));
    $artist_id = strip_tags(trim($_POST['artist_id']));
    $categ_id = strip_tags(trim($_POST['categ_id']));

    $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
    $query = "INSERT INTO songs(title, release_date, poster, artist_id, categ_id)
    VALUES('$title', '$release_date', '$poster', $artist_id, $categ_id)";

    if (mysqli_query($conn, $query))
        echo '<p class="success">Inserted successfully</p>';
    else
        echo '<p class="error">Problem inserting</p>';
}
