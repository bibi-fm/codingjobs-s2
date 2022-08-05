<?php 
session_start();
if (!isset($_COOKIE['isLogIn'])) {
    echo "You do not have acess to this page please <a href='login_1.php'>Login</a>.";
}
?>