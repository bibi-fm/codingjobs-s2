<?php
$pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

$results = $pdo->query('SELECT * FROM songs');

$songs = $results->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs (PDO)</title>
</head>

<body>
    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title : </strong>
            <?= $song['title']; ?>
        </p>

        <a href="song-details.php?id=<?= $song['id']; ?>">Detail page</a>

        <hr>

    <?php endforeach; ?>
</body>

</html>