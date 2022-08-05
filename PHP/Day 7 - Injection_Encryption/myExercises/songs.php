<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');

if ($conn) {
    $query = 'SELECT * FROM songs';
    $results = mysqli_query($conn, $query);
    $songs = mysqli_fetch_all($results, MYSQLI_ASSOC);

} else {
    echo 'Problem connecting with the database';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>

<body>
    <?php require_once 'account-nav.html'; ?>
    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title : </strong>
            <?= $song['title']; ?>
        </p>

        <p>
            <strong>Release date : </strong>
            <?= $song['release_date']; ?>
        </p>


        <img src="<?= $song['poster'] ?>" alt="">

        <a href="details.php?id=<?= $song['id']; ?>">Details</a>

        <hr>

    <?php endforeach; ?>


</body>

</html>