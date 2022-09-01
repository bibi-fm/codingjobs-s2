<?php

function handle_songs()
{
    // Ask the model the data
    require_once './Model/SongModel.php';
    $songs = find_all();

    // Pass the data to the view
    require_once './View/SongsView.php';
}

function handle_song($id)
{
    // You can check if id is numeric...
    require_once './Model/SongModel.php';
    $song = find($id);

    if ($song != null)
        require_once './View/SongDetailsView.php';
    else {
        $msg = 'Song not available<br>';
        require_once './View/ErrorView.php';
    }
}
