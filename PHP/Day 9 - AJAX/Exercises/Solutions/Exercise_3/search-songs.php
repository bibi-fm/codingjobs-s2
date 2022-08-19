<?php

$search = $_POST['search'];

$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
$query = "SELECT * FROM songs WHERE title LIKE '$search%'";
$results = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>

<?php foreach ($songs as $song) : ?>

    <p>
        <strong>Title : </strong>
        <?= $song['title']; ?>
    </p>

    <p>
        <strong>Release date : </strong>
        <?= $song['release_date']; ?>
    </p>


    <img src="<?= $song['poster'] ?>" width="100px">

    <hr>

<?php endforeach; ?>