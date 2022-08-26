<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <h2>Contact Us</h2>

    <?php
    if (isset($_POST['submitBtn'])) {
    }
    ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Full name(*)"><br>
        <input type="text" name="email" placeholder="Email adress(*)"><br>
        <input type="text" name="phone" placeholder="Phone number"><br>
        <input type="text" name="subject" placeholder="Subject"><br>
        <input type="text" name="message" placeholder="Your message(*)"><br>
        <small>(*) mandatory</small><br>
        <input type="submit" name="submitBtn" value="Send email">
    </form>
</body>

</html>