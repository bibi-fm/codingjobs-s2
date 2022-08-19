<?php
var_dump($_POST);
$search = $_POST['search'];

$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
$query = "SELECT * FROM songs WHERE title LIKE '%$search%'";
$results = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<?php foreach ($songs as $song) : ?>
    <h3><?php $song['title']?></h3>
    <p><?php $song['release_date']?></p>
    <p><?php $song['poster']?></p>
<?php endforeach ?>