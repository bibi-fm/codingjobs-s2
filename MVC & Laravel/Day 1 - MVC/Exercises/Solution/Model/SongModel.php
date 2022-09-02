<?php

class SongModel
{
    private function get_pdo()
    {
        return new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');
    }

    public function find_all()
    {
        $pdo = $this->get_pdo();

        $results = $pdo->query('SELECT * FROM songs');
        $songs = $results->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;

        return $songs;
    }

    public function find($id)
    {
        $pdo = $this->get_pdo();

        $prep = $pdo->prepare('SELECT * FROM songs WHERE id = ?');
        $prep->bindValue(1, $id);
        $prep->execute();

        $song = $prep->fetch(PDO::FETCH_ASSOC);
        $pdo = null;

        return $song;
    }
}
