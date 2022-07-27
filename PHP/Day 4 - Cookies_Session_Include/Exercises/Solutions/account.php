<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account page</title>
</head>

<body>
    <?php

    if (isset($_SESSION['email'])) {
        echo 'Welcome user, email : ' . $_SESSION['email'];
    } else {
        header("Location: login.php");
        exit();
    }

    // Click on logout
    if (isset($_POST['logoutBtn'])) {
        unset($_SESSION['email']);
        header("Location: login.php");
        exit();
    }
    ?>

    <form method="post">
        <input type="submit" value="Log out" name="logoutBtn">
    </form>

</body>

</html>