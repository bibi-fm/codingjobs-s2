<form action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="submit" name="submitBtn" value="Send">
</form>

<?php


echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo '<pre>';
var_dump($_POST);
echo '</pre>';
?>