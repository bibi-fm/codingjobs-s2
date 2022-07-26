<?php
if (isset($_COOKIE['viewed'])) {
    echo "You have visited the page create-cookie";
    /*echo '<pre>';
    var_dump($_COOKIE['viewed']);
    echo '</pre>';*/
} else {
    echo "You  have not visited the create-cookie page";
}
