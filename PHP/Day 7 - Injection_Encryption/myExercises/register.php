<?php

/*
Based on the Register exercise :
(a) Protect/clean the data coming from the Form before inserting the user DONE
(b) Hash the password before before inserting the user DONE
(c) Create the login page where you have to :
    (c.1) Check if the email match a user in the DB DONE
    (c.2) If you found a match, check if password matches DONE
    (c.3) Display a success or error message DONE

Continue the Spotify exercise.
    - (a) Create the artists page (where you have to display all the artists) DONE
    - (b) Create the detail artist page. You have to use GET method to retrieve the id of the artist.
    Display all the informations from the artist. DONE
    - (c) Edit the artists page. Create a link to detail page for each artist. DONE
*/

if (isset($_POST['register-btn'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && str_contains($_POST['email'], "@") && $_POST['password'] === $_POST['check-pass']) {

        echo "Thank you for registering! You can now login on this page <a href = './login.php'>Login</a><br>";

        $username = strip_tags(trim($_POST['username']));
        $validUsername = filter_var($username, FILTER_DEFAULT);

        $password = trim($_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $email = strip_tags(trim($_POST['email']));
        $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

        $picName = $_FILES['myFile']['name'];
        $filePath = "uploaded_files/$picName";
        $validPic = false;

        if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
            die('Error during upload.<br>');
        } else {
            $validPic = true;
        }

        $extension = array_search($_FILES['myFile']['type'], array(
            '.jpg' => 'image/jpeg',
            '.png' => 'image/png',
            '.gif' => 'image/gif'
        ));
        if ($extension === false) {
            die('File must be an image !<br>');
        } else {
            if (move_uploaded_file($_FILES['myFile']['tmp_name'], $filePath)) {
                echo 'File uploaded !<br>';
                $validPic = true;
            } else {
                echo 'Problem uploading the file!<br>';
                $validPic = false;
            }
        }

        //Connection to DB && insertion of data
        $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
        if ($validEmail && $validUsername && $validPic) {
            echo "Your credentials are valid.<br>";
            if ($conn) {
                $query = "INSERT INTO users(username, email, password, picture)
            VALUES('$username', '$email', '$password', '$picName')";

                $result = mysqli_query($conn, $query);
            }
        } else {
            echo "Invalid credentials.<br>";
        }
    }
    if (empty($_POST['username'])) {
        echo "Please enter your username <br>";
    }
    if (empty($_POST['email']) || !str_contains($_POST['email'], "@")) {
        echo "You must enter an email and it must contain '@'. <br>";
    }
    if (empty($_POST['password'])) {
        echo "A password is required. <br>";
    } else if ($_POST['password'] != $_POST['check-pass']) {
        echo "Both passwords need to be a match. <br>";
    }
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
    <form enctype="multipart/form-data" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Email">
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password" placeholder="Password">
        <br>
        <label for="check-pass">Confirm Password:</label>
        <input type="text" name="check-pass" placeholder="Confirm Password">
        <br>
        <input type="file" name="myFile"><br>
        <button type="sumbit" name="register-btn">Register</button>
    </form>
</body>

</html>