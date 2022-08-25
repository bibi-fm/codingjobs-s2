<?php

class FlowerManager
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
    }
    public function find_all()
    {
        $results = $this->pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
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

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetch();
        $this->pdo = null;
        return $flower;
    }
    public function insert_flower($name, $price)
    {
        if(isset($_POST)){
            
        }
    }
}
