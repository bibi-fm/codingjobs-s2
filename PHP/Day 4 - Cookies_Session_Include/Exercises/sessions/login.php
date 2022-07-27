<?php
session_start();
if (isset($_POST['submit-btn'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $_SESSION['email'] = $_POST['email'];

        setcookie('isLogIn', true);

        header("Location: http://localhost:45000/codingjobs-s2/PHP/Day%204%20-%20Cookies_Session_Include/Exercises/sessions/account.php");

        /*echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
        echo '<pre>';
        var_dump($_COOKIE);
        echo '</pre>';*/
    } else {
        echo "Password and email are mandatory!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="text" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password">
        <br>
        <button type="submit" name="submit-btn">Log In</button>
    </form>
</body>

</html>