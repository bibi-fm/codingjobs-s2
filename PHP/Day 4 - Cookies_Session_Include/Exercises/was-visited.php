<?php
if (isset($_POST['reset-btn'])) {
    setcookie('timesVisited', 0, time()-3600);
    unset($_COOKIE['timesVisited']);
}
if (isset($_COOKIE['timesVisited'])) {

    setcookie('timesVisited', $_COOKIE['timesVisited'] + 1);
    echo "You have visited our page " . $_COOKIE['timesVisited'] . " time(s)<br>";
    echo 'Date of first visit:' . date('d/m/Y', $_COOKIE['first_visit']) . "<br>";
    /*echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';*/
} else {
    echo "This is your first time visiting.";
    setcookie('timesVisited', 1);
    setcookie('first_visit', time());
}

?>
<form method="POST">
    <button type="submit" name="reset-btn">Reset</button>
</form>
