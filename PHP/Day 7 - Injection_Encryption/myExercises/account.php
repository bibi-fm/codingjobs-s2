<?php
if (isset($_COOKIE['isLogIn'])) {
    session_start();
    require_once 'account-nav.html';
    $username = $_SESSION['username'];
    echo "<h2> Welcome, $username.<h2>";

    if (isset($_POST['delete-btn'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
        if ($conn) {
            $query = "DELETE FROM users WHERE username = '$username'";

            $results = mysqli_query($conn, $query);

            setcookie('isLogIn', 0, time() - 3600);

            //session_destroy();

            header("Location: register.php");
        } else {
            echo "Something went wrong. Please contact the administration.";
        }
    }
} else {
    require_once 'permissions.php';
}
/*if (isset()) {
    setcookie('isLogIn', 0, time() - 3600);
}*/
/*
    Continue the Spotify exercise:
    - When a user is logged-in, hide Login/Register links. DONE
    - Instead, display a link to log-out. DONE
    - You have to use cookie. DONE
    - You have to implement log-out process. DONE


    Let's continue the Spotify Exercise.
    (a) Create an 'account.php' page DONE
    (b) In this page, display all the informations about the user : username / email and picture DONE
    (c) Create a 'Delete' button/link. When you click, it should :
        (c.1) Delete the user from the DB DONE
        (c.2) Redirect to register page DONE

    --Bonus--

    Make a small form with an input type file + submit button on the page.
    This form will allow the user to change its profile picture.

    When the user select a picture and press 'upload', it should upload the file and UPDATE the DB.

*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>

<body>
    <?php if (isset($_COOKIE['isLogIn'])) : ?>
        <p><?= $username; ?></p>
        <p><?= $_SESSION['email']; ?></p>
        <img src="<?= $_SESSION['picture']; ?>">
        <!--<?php var_dump($_SESSION['picture']);?>-->
        <!--<img src="./uploaded_files/avatar_1.png">-->
        <form method="POST">
            <button type="submit" name="delete-btn">Delete</button>
        </form>
    <?php endif; ?>
</body>

</html>