<form method="post">
    <input type="submit" name="resetBtn" value="Reset">
</form>

<?php

// Did I clicked on reset btn
if (isset($_POST['resetBtn'])) {
    // Remove the cookie from the cookie file (permanent)
    setcookie('count', 0, time() - 3600);

    // Remove the cookie from the array
    unset($_COOKIE['count']);
}

// Check if my cookie exists
if (isset($_COOKIE['count'])) {
    setcookie('count', $_COOKIE['count'] + 1);
    echo 'Number of time visited : ' . $_COOKIE['count'] . '<br>';
    echo 'Date of first visit : ' . date('d/m/Y', $_COOKIE['first_visit']) . '<br>';
} else {
    echo 'First time visiting the page !';
    setcookie('count', 1);
    setcookie('first_visit', time());
}
