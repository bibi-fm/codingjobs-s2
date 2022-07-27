<?php
session_start();
if (isset($_COOKIE['isLogIn'])) {
    echo "Welcome, username. Email address : " . $_SESSION['email'];
} else {
    //echo "Please register your account.";
    header("Location: http://localhost:45000/codingjobs-s2/PHP/Day%204%20-%20Cookies_Session_Include/Exercises/sessions/login.php");
}
if (isset($_POST['logout-btn'])) {
    setcookie('isLogIn', 0, time() - 3600);
    header("Location: http://localhost:45000/codingjobs-s2/PHP/Day%204%20-%20Cookies_Session_Include/Exercises/sessions/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>

<body>
    <form method="POST">
        <button type="submit" name="logout-btn">Log out</button>
    </form>
</body>

</html>