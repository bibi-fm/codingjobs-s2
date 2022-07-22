<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle form</title>
</head>

<body>

    <?php
    /*
        method attribute of a form defines HOW you send the request to the server. Two ways : GET and POST methods.

        When the server receives request/data from a form, he save those data into a superglobale variable.

        Those variables are available on any PHP script : 
            $_GET
            $_POST

        GET method : 
            It will request the server and send data directly using URL
        form.php?firstName=simon&lastName=bertrand

        POST method : 
        Will send data without editing the URL.
        Use post when information are sensitive.

        ----

        action attribute : choose WHERE (which page) to send the data to

        */


    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    // We want to interact ONLY when we submit the form
    if (isset($_POST['submitBtn'])) {
        // echo 'I clicked on the form !';

        // Errors ?
        $errors = false;

        // Firstname is required
        if (empty($_POST['firstName'])) {
            echo 'Firstname is mandatory !';
            $errors = true;
        }

        // Lastname is required
        if (empty($_POST['lastName'])) {
            echo 'Lastname is mandatory !';
            $errors = true;
        }

        // Check if age is numeric
        if (!is_numeric($_POST['age'])) {
            echo 'Age must be a numeric value !';
            $errors = true;
        }

        if ($errors == false)
            echo 'Welcome ' . $_GET['firstName'];
    }



    ?>


    <form method="POST" action="">
        <input type="text" name="firstName" placeholder="First name"><br>
        <input type="text" name="lastName" placeholder="Last name"><br>
        <input type="text" name="age" placeholder="Age"><br>
        <input type="submit" name="submitBtn" value="Send">
    </form>
</body>

</html>