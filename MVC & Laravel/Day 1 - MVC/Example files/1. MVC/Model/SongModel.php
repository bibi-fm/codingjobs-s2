<?php

function find_all()
{
    $pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

    $results = $pdo->query('SELECT * FROM songs');
    $songs = $results->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;

    return $songs;
}

function find($id)
{
    $pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

    $prep = $pdo->prepare('SELECT * FROM songs WHERE id = ?');
    $prep->bindValue(1, $id);
    $prep->execute();

    $song = $prep->fetch(PDO::FETCH_ASSOC);
    $pdo = null;

    return $song;
}
