<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
</head>

<body>
    <?php include 'nav.html'; ?>

    <h1>Contact page</h1>

    <?php
    // You can use PHP file also
    require_once 'functions.php';
    message();
    ?>
</body>

</html>