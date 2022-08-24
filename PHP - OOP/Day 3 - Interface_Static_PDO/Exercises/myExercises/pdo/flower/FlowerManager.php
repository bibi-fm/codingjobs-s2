<?php 

class FlowerManager {

    public function findAll(){
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        return $flowers;
    }

    public function find($id){
        
    }
}
