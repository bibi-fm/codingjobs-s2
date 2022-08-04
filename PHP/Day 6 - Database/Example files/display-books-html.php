<?php

// Working With Database

// 1. Connect to the DB
$conn = mysqli_connect('localhost', 'root', '', 'library');

// True if connected, false if not
if ($conn) {
    echo 'Connected successfully<br>';

    // 2. Prepare the query
    $query = 'SELECT * FROM books';

    // 3. Ask DB to run/execute the query 
    $results = mysqli_query($conn, $query);

    // I retrieved my results but I need to fetch before using them
    // 4. Fetch the results as an associative array
    $books = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // echo '<pre>';
    // var_dump($books);
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
    <?php foreach ($books as $book) : ?>

        <p>
            <strong>Title : </strong>
            <?= $book['title']; ?>
        </p>

        <p>
            <strong>Publication date : </strong>
            <?= $book['publication_date']; ?>
        </p>


        <img src="<?= $song['poster'] ?>" alt="">



        <hr>

    <?php endforeach; ?>


</body>

</html>