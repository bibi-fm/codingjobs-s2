<?php 

class FlowerManager {

    public function find_all(){
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $pdo = null;
        return $flowers;
    }

    public function find($id){
        return $this->id = $id;
    }
}
