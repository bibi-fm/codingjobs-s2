<?php
    setcookie('isLogIn', 0, time() - 3600);
    header("Location: login.php");
