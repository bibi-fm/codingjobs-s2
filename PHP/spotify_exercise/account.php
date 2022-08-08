<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account page</title>
</head>

<body>
    <h2>Account page</h2>

    <?php
    if (!isset($_COOKIE['email'])) {
        die('You cannot this page.');
    } else {
        $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
        $query = 'SELECT * FROM users WHERE email = "' . $_COOKIE['email'] . '"';
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        echo 'Email : ' . $user['email'] . '<br>';
        echo 'Username : ' . $user['username'] . '<br>';
        echo '<img src="' . $user['picture'] . '">';
    }

    ?>


    <form method="POST">
        <input type="submit" name="deleteBtn" value="Delete my account">
    </form>

    <?php
    if (isset($_POST['deleteBtn'])) {
        $query = 'DELETE FROM users WHERE email = "' . $_COOKIE['email'] . '"';
        $result = mysqli_query($conn, $query);
        if ($result) {
            header('Location: login.php');
        } else {
            echo 'Something went wrong. Contact administrator.';
        }
    }

    ?>


</body>

</html>