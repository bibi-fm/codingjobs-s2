<?php
    if (isset($_POST['register-btn'])) {

        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && str_contains($_POST['email'], "@") && $_POST['password'] === $_POST['check-pass']) {
            if (file_exists('../users.txt')) {
                $opened_file = fopen('../users.txt', 'r');

                $fileContent = fgets($opened_file);
                echo $fileContent;
            }
        } 
        if (empty($_POST['username'])){
            echo "Please enter your username <br>";
        }
        if(empty($_POST['email']) || !str_contains($_POST['email'], "@")){
            echo "You must enter an email and it must contain '@'. <br>";
          
        }
        if(empty($_POST['password'])){
            echo "A password is required. <br>";
        } else if ($_POST['password'] != $_POST['check-pass']) {
            echo "Both passwords need to be a match. <br>";
           
        }
        //echo 'All fields must be completed';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email">
        <br>
        <label for="password">Password</label>
        <input type="text" name="password" placeholder="Password">
        <br>
        <label for="check-pass">Confirm Password</label>
        <input type="text" name="check-pass" placeholder="Confirm Password">
        <br>
        <button type="sumbit" name="register-btn">Register</button>
        <br>
    </form>
</body>

</html>

<?php

/*

    Exercise :

    In this exercise, you'll have to create the register process.

    - Step 1 : DONE
        Create a 'register.php' file
        This file contains a form with those input :
            * username
            * email
            * password
            * confirm password
            * submit btn

    - Step 2 : DONE
        If the form is submitted, you have to check :
            * username, mail and password must not be empty !
            * mail must be a valid one (with @ symbol)
            * passwords must be the same 
        
        Display a different message for each validation/error.

    - Step 3 :
        If everything is good, insert the new user in the "users.txt" file.
        It should be inserted on a new line matching the template (mail:password);

    */
