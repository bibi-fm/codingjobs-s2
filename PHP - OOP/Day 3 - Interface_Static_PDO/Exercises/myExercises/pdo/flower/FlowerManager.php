<?php

class FlowerManager
{

    public function find_all()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $pdo = null;
        return $flowers;
    }

    public function find($id)
    {
        $this->id = $id;
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        $query = "SELECT * FROM flowers WHERE id = :id";
        $prep = $pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetch();
        $pdo = null;
        return $flower;
    }
}
