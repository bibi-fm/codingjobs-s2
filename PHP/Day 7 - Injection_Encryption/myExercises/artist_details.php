<?php
$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
if ($conn) {
    $query = "SELECT * FROM artists WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $artist = mysqli_fetch_assoc($result);
    /*echo '<pre>';
    var_dump($table);
    echo '</pre>';*/
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Details</title>
</head>

<body>
    <?php require_once 'account-nav.html'; ?>
    <p>
        <strong>Name : </strong>
        <?= $artist['name']; ?>
    </p>
    <p>
        <strong>Bio : </strong>
        <?= $artist['bio']; ?>
    </p>
    <p>
        <strong>Gender : </strong>
        <?= $artist['gender']; ?>
    </p>
    <p>
        <strong>Birth Year : </strong>
        <?= $artist['birth_year']; ?>
    </p>
</body>
</body>

</html>