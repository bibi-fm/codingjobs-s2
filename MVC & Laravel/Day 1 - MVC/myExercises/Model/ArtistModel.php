<?php

class ArtistModel
{
    private function get_pdo()
    {
        return new PDO('mysql:host=localhost;dbname=spotify_db', 'root', '');
    }
    public function add_artist($name, $gender, $birth_year, $bio)
    {
        $pdo = $this->get_pdo();

        $query = "INSERT INTO artists (name, gender, birth_year, bio)
        VALUES (:name, :gender, :birth_year, :bio)";

        $prep = $pdo->prepare($query);

        //assigned the values being passed to the function
        $prep->bindValue(':name', $name);
        $prep->bindValue(':gender', $gender);
        $prep->bindValue(':birth_year', $birth_year);
        $prep->bindValue(':bio', $bio);
        
        $prep->execute();

        //$prep ? true : false;
        if ($prep){
            return true;
        } else {
            return false;
        }

        
    }
}
