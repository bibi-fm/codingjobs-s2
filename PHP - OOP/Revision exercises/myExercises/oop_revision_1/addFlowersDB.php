<?php
//if (isset($_POST['add-btn'])) {} 
$errors = [];
    $validated = false;

    //declare form data
    $name = $_POST['flower-name'];
    $price = $_POST['flower-price'];

    if (empty($name)) {
        $errors['name'] = 'Name field is empty';
    }
    if (empty($price)) {
        $errors['price'] = 'Price field is empty';
    }

    if (!empty($errors)) {
        //var_dump($errors);
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    } else {
        echo "Form OK<br>";
        $validated = true;
    }

    if ($validated) {
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');

        $query = "INSERT INTO flowers (name, price)
        VALUES (:name, :price)";

        $prep = $pdo->prepare($query);
        $prep->bindValue(':name', $name);
        $prep->bindValue(':price', $price);

        $prep->execute();

        if ($prep){
            echo 'Flower inserted successfully.';
            $flowers = $prep->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;
        } else {
            echo 'Unable to insert new flower.';
        }

        /*foreach ($flowers as $flower) {
            echo 'Name: ' . $name . '<br>' . 'Price: ' . $price . '<br>' . '<hr>';
        }*/
        
    }
?>