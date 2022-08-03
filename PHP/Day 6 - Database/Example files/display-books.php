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

    foreach ($books as $book) {
        echo $book['title'] . '<br>';
        echo $book['publication_date'] . '<hr>';
    }
} else {
    echo 'Problem connecting with the database';
}
