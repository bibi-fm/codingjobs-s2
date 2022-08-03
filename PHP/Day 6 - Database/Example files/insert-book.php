<?php

// 1. Connect to the DB
$conn = mysqli_connect('localhost', 'root', '', 'library');

// True if connected, false if not
if ($conn) {
    echo 'Connected successfully<br>';

    // 2. Prepare the query
    $query = "INSERT INTO books(publication_date, title, price, description, author_id)
    VALUES('LOTR', '1954-05-01', 10, 'lorem ipsum', 1)";

    // 3. Execute the query
    $result = mysqli_query($conn, $query);

    // When insert/update/delete, it returns true or false
    if ($result)
        echo 'Successfully inserted in the DB.';
    else
        echo 'Problem inserting.';
} else {
    echo 'Problem connecting with the database';
}
