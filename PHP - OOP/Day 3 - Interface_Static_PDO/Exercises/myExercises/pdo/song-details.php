<?php

if (!isset($_GET['id']) || !is_numeric($_GET['id']))
    die('Something wrong. Missing id');
    
$id = $_GET['id'];

$pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

$query = "SELECT * FROM songs INNER JOIN artists ON artist_id = artists.id WHERE songs.id = :id";
//$results = $pdo->query('SELECT * FROM songs WHERE id = $id');

$prep = $pdo->prepare($query);
$prep->bindValue(':id', $id);

$prep->execute();
$songs = $prep->fetchAll(PDO::FETCH_ASSOC);

//var_dump($songs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song details</title>
</head>

<body>
    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title : </strong>
            <?= $song['title']; ?>
        </p>
        <p>
            <strong>Title : </strong>
            <?= $song['release_date']; ?>
        </p>
        <hr>
        <p>
            <strong>Artist : </strong>
            <?= $song['name']; ?>
        </p>
        <p>
            <strong>Bio : </strong>
            <?= $song['bio']; ?>
        </p>

    <?php endforeach; ?>
</body>

</html>