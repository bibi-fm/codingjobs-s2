<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
</head>

<body>

    <?php
    // Make sure form is submitted
    if (isset($_POST['loginBtn'])) {

        if (empty($_POST['email']) || empty($_POST['password'])) {
            echo 'Email and password are mandatory!<br>';
        } else {
            // Save email coming from the form (POST) in the session
            $_SESSION['email'] = $_POST['email'];
            var_dump($_SESSION);
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="email" placeholder="Your email"><br>
        <input type="text" name="password" placeholder="Your password"><br>
        <input type="submit" name="loginBtn" value="Log in">
    </form>
</body>

</html>