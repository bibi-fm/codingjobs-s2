<?php

require_once 'Flower.php';
require_once 'database.php';

class FlowerManager
{
    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=" . SERVER . ";dbname=" . DB_NAME . ";";
        $this->pdo = new PDO($dsn, USERNAME, PASSWORD);
    }

    public function findAll()
    {
        $results = $this->pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $pdo = null;

        return $flowers;
    }

    public function find($id)
    {
        $prep = $this->pdo->prepare('SELECT * 
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
