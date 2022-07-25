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

    $lastName = '';
    $firstName = '';
    $email = '';

    // Check if form was submitted
    if (isset($_POST['signinBtn'])) {
        // Save the inputs
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];

        $errors = array();

        // Validations
        if (empty($_POST['firstName']))
            $errors['firstName'] = 'Firstname is mandatory.<br>';

        if (empty($_POST['lastName']))
            $errors['lastName'] = 'Lastname is mandatory.<br>';

        if (strlen($_POST['email']) < 8 || strlen($_POST['email']) > 50)
            $errors['email'] = 'Email must be between 8 and 50 characters.<br>';


        if (strlen($_POST['password']) < 8)
            $errors['password'] = 'Password must be at least 8 character long.<br>';
        elseif ($_POST['password'] != $_POST['confirmPassword'])
            $errors['password'] = 'Password are not identical !<br>';


        // Display summary only if NO errors
        if (count($errors) == 0) {
            echo 'Name : ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . '<br>';
            echo 'Email : ' . $_POST['email'] . '<br>';

            if (isset($_POST['subscribe']))
                echo 'User subsribed to the newsletter.';
        }
        // } else {
        //     foreach ($errors as $key => $value) {
        //         echo "$key : $value<br>";
        //     }
        // }
    }

    ?>



    <form method="post">
        <input type="text" name="lastName" placeholder="Last Name" value="<?= $lastName; ?>">
        <?php
        if (isset($errors['lastName'])) echo $errors['lastName'];
        ?>
        <br>

        <input type="text" name="firstName" placeholder="First Name" value="<?= $firstName; ?>">
        <?php
        if (isset($errors['firstName'])) echo $errors['firstName'];
        ?>
        <br>

        <input type="text" name="email" placeholder="Your Email" value="<?= $email; ?>">
        <?php
        if (isset($errors['email'])) echo $errors['email'];
        ?>
        <br>

        <input type="text" name="password" placeholder="Enter a password">
        <?php
        if (isset($errors['password'])) echo $errors['password'];
        ?>
        <br>

        <input type="text" name="confirmPassword" placeholder="Confirm password"><br>
        <label for="sub">Subscribe to the newsletter </label>
        <input type="checkbox" name="subscribe" id="sub"><br>
        <input type="submit" name="signinBtn" value="Sign in">
    </form>

</body>

</html>