<?php

/*
    Clean form data.

    User data can be manipulated in different ways by malicious person through the form.

    - Clean data
    - Validate the data
    - Escape data before sending DB
    - Escape data before sending to the user/client

*/

if (isset($_POST['submitBtn'])) {
    // Original value : 
    echo $_POST['myInput'] . '<br>';

    /* 
        htmlspecialchars() convert your HTML tag to entities
        & convert to &lt;
        < convert to &amp;
    */
    echo htmlspecialchars($_POST['myInput']) . '<br>';

    // Remove all specials symbal (html tags)
    echo strip_tags($_POST['myInput']);
}

?>

<form method="post">
    <input type="text" name="myInput" placeholder="Type in something"><br>

    <input type="submit" name="submitBtn" value="Try me">
</form>