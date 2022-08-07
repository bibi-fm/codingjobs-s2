<?php
session_start();
if (isset($_POST['submit-btn'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        
        $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($conn) {
            $query = "SELECT * FROM users WHERE email = '$email'";

            $results = mysqli_query($conn, $query);

            $table = mysqli_fetch_all($results, MYSQLI_ASSOC); //mysqli_fetch_assoc($results) would be better if you're just expecting one result

            $username = $table[0]['username'];
            $picture = $table[0]['picture'];

            if ($table[0]['email'] === $email && password_verify($password, $table[0]['password'])) {
                //echo "User successfully logged in.<br>";
                setcookie('isLogIn', true);
                header("Location: account.php");
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $username;
                if ($picture){
                    $_SESSION['picture'] = "/uploaded_files/$picture"; 
                }
            } else if (mysqli_num_rows($results) === 0) {
                echo "User does not exist";
            } else {
                echo "The credentials are incorrect.<br>";
            }
        }
    } else {
        echo "Password and email are mandatory!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <?php require_once 'nav.html'; ?>
    <style>
        ul {
            display: flex;
            justify-content: flex-end;
            gap: 30px;
        }
    </style>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="text" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password">
        <br>
        <button type="submit" name="submit-btn">Log In</button>

    </form>
</body>

</html>