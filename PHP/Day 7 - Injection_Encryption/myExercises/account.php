<?php
if (isset($_COOKIE['isLogIn'])) {
    require_once 'account-nav.html';
    echo "<h2> Welcome.<h2>";
} else {
    require_once 'permissions.php';
}
/*if (isset()) {
    setcookie('isLogIn', 0, time() - 3600);
}*/
/*
    Continue the Spotify exercise:
    - When a user is logged-in, hide Login/Register links. DONE
    - Instead, display a link to log-out. DONE
    - You have to use cookie. DONE
    - You have to implement log-out process. DONE
*/
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
    
</html>