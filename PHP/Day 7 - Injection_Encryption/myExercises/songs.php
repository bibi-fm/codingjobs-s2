<?php

// Working With Database

// 1. Connect to the DB
$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');

// True if connected, false if not
if ($conn) {

    // 2. Prepare the query
    $query = 'SELECT * FROM songs';

    // 3. Ask DB to run/execute the query 
    $results = mysqli_query($conn, $query);

    // I retrieved my results but I need to fetch before using them
    // 4. Fetch the results as an associative array
    $songs = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // echo '<pre>';
    // var_dump($songs);
    // echo '</pre>';
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
    <title>Document</title>
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

        <a href="details.php?id=<?= $song['id']; ?>">Detail page</a>

        <hr>

    <?php endforeach; ?>


</body>

</html>