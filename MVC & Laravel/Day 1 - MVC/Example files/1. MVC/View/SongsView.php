<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs List</title>
</head>

<body>
    <h2>Songs List</h2>

    <?php
    foreach ($songs as $s) {
        echo 'Title : ' . $s['title'] . '<br>';
        echo 'Date : ' . $s['release_date'] . '<br>';
        echo '<a href="song-details.php?id=' . $s['id'] . '">Detail page</a>';
        echo '<hr>';
    }
    ?>

</body>

</html>