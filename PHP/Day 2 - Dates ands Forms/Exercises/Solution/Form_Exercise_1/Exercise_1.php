<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form exercise 1</title>
</head>

<body>

    <?php
    if (isset($_POST['loginBtn'])) {
        if (strpos($_POST['email'], "@") != false) {
            echo "<div style='color:green; font-weight:bold; '>valid e-mail</div>";
        } else {
            echo "<div style='color:red; font-weight:bold; '>invalid e-mail</div>";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="submit" value="Login" name="loginBtn">
    </form>
</body>

</html>