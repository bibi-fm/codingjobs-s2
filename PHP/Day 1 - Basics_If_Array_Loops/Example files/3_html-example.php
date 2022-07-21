<?php
// PHP tag can be opened anywhere/everywhere in the file
$firstName = 'Simon';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML with PHP</title>
</head>

<body>
    <h1>HTML/PHP Page</h1>

    <?php
    // You can open multiple php tags
    // You can write PHP code in different places on the same file 
    echo 'Firstname : ' . $firstName;
    ?>

</body>

</html>