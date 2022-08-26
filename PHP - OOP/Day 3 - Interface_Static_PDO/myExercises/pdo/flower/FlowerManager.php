<?php

namespace Flowers\Utilities;

use \PDO;

class FlowerManager
{
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
    }
    public function find_all()
    {
        $results = $this->pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $this->pdo = null;
        return $flowers;
    }

    public function find($id)
    {
        $this->id = $id;
        $query = "SELECT * FROM flowers WHERE id = :id";
        $prep = $this->pdo->prepare($query);
        $prep->bindValue(':id', $id);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flowers\Flower');
        $flower = $prep->fetch();
        $this->pdo = null;
        return $flower;
    }
}
