<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>

<body>

    <h1>Sign-in form</h1>

    <?php

    // Check if form was submitted
    if (isset($_POST['signinBtn'])) {
        $errors = false;

        // Validations
        if (empty($_POST['firstName'])) {
            echo 'Firstname is mandatory.<br>';
            $errors = true;
        }

        if (empty($_POST['lastName'])) {
            echo 'Lastname is mandatory.<br>';
            $errors = true;
        }

        if (strlen($_POST['email']) < 8 || strlen($_POST['email']) > 50) {
            echo 'Email must be between 8 and 50 characters.<br>';
            $errors = true;
        }

        if (strlen($_POST['password']) < 8) {
            echo 'Password must be at least 8 character long.<br>';
            $errors = true;
        } elseif ($_POST['password'] != $_POST['confirmPassword']) {
            echo 'Password are not identical !<br>';
            $errors = true;
        }

        // Display summary only if NO errors
        if (!$errors) {
            echo 'Name : ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . '<br>';
            echo 'Email : ' . $_POST['email'] . '<br>';

            if (isset($_POST['subscribe']))
                echo 'User subsribed to the newsletter.';
        }
    }

    ?>



    <form method="post">
        <input type="text" name="lastName" placeholder="Last Name"><br>
        <input type="text" name="firstName" placeholder="First Name"><br>
        <input type="text" name="email" placeholder="Your Email"><br>
        <input type="text" name="password" placeholder="Enter a password"><br>
        <input type="text" name="confirmPassword" placeholder="Confirm password"><br>
        <label for="sub">Subscribe to the newsletter </label>
        <input type="checkbox" name="subscribe" id="sub"><br>
        <input type="submit" name="signinBtn" value="Sign in">
    </form>

</body>

</html>