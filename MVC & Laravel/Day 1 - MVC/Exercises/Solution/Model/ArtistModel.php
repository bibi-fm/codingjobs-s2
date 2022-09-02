<?php

class ArtistModel
{
    // name, gender, birth_year and bio.

    public function insert($name, $gender, $by, $bio)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');

        $prep = $pdo->prepare('INSERT INTO artists(name, gender, birth_year, bio) VALUES(?, ?, ?, ?)');

        return $prep->execute([0 => $name, 1 => $gender, 2 => $by, 3 => $bio]);
    }
}
