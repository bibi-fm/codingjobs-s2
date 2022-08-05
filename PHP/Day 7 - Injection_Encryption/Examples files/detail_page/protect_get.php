<?php

// Check if id is inside the URL
if (isset($_GET['id'])) {
    // Retrieve id from the URL
    $id = (int) $_GET['id'];

    if ($id > 0) {

        $query = "SELECT * FROM songs WHERE id = $id";

        echo $query;
    } else {
        echo 'Dont be a smart ass';
    }
} else {
    echo 'You are trying to access something that you should not';
}
