<?php

require_once 'Flower.php';

class FlowerManager
{

    public function findAll()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flowers_db', 'root', '');

        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $pdo = null;

        return $flowers;
    }

    public function find($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flowers_db', 'root', '');

        $prep = $pdo->prepare('SELECT * 
        FROM flowers
        WHERE id = :id');
        $prep->bindValue(':id', $id);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetch();
        $pdo = null;

        return $flower;
    }
}
