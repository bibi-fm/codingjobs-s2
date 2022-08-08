<?php 
session_start();
if (!isset($_COOKIE['isLogIn'])) {
    echo "You do not have acess to this page please head to <a href='login.php'>Login</a> page.";
}
?>