<?php 

$conn = mysqli_connect('localhost', 'root', '', 'spotify');

if ($conn) {
    echo 'Connected successfully<br>';

    $query = 'SELECT * FROM music';

    $results = mysqli_query($conn, $query);

    $table = mysqli_fetch_all($results, MYSQLI_ASSOC);


    foreach ($table as $attribute) {
        echo $attribute['title'] . '<br>';
        echo $attribute['release_date'] . '<hr>';
    }
} else {
    echo 'Problem connecting with the database';
}
?>