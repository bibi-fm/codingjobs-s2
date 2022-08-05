<?php
if (isset($_COOKIE['isLogIn'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
    if ($conn) {
        $query = 'SELECT * FROM artists';
        $results = mysqli_query($conn, $query);
        $artists = mysqli_fetch_all($results, MYSQLI_ASSOC);
    } else {
        echo 'Problem connecting with the database';
    }
    require_once 'account-nav.html';
} else {
    require_once 'permissions.php';
}


/*
    Continue the Spotify exercise.
    - (a) Create the artists page (where you have to display all the artists) DONE
    - (b) Create the detail artist page. You have to use GET method to retrieve the id of the artist DONE
    - (c) Edit the artists page. Create a link to detail page for each artist. DONE
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
</head>

<body>
    <?php if (isset($_COOKIE['isLogIn'])) : ?>
        <?php foreach ($artists as $artist) : ?>
            <p>
                <?= $artist['name']; ?>
            </p>

            <a href="artist_details.php?id=<?= $artist['id']; ?>">Details</a>

            <hr>
        <?php endforeach ?>
    <?php endif ?>
</body>

</html>