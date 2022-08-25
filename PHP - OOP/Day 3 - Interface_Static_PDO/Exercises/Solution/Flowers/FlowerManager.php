<?php

class FlowerManager
{

    public function findAll()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flowers_db', 'root', '');

        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;

        return $flowers;
    }
}
