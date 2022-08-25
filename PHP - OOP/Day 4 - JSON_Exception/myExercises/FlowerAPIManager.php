<?php
class FlowerAPIManager
{
    public function find_all()
    {
        $results = $this->pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $this->pdo = null;
        return json_encode($flowers, JSON_PRETTY_PRINT);
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
        return json_encode($flower, JSON_PRETTY_PRINT);
    }
}
