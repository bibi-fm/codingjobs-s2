<?php

$name = $_POST['name'];
$bio = $_POST['bio'];

if (empty($name))
    echo 'Name is mandatory<br>';

echo 'Name :' . $name . '<br>';
echo 'Biography :' . $bio . '<br>';

$query = "INSERT INTO Artists(name, biography)
VALUES('$name', '$bio')";
