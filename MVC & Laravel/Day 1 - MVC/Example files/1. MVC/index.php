<?php

// Check if there is a request
if (isset($_GET['page'])) {
    // Call the proper controller based on the request
    if ($_GET['page'] == 'songs') {
        require_once './Controller/SongController.php';

        if (isset($_GET['id']))
            handle_song($_GET['id']);
        else
            handle_songs();
    } else {
        $msg = "404 - The page doesn't exists<br>";
        require_once './View/ErrorView.php';
    }
}
