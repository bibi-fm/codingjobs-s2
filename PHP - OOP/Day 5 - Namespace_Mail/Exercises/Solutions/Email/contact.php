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

        $errors = array();

        if (empty($_POST['name'])) {
            $errors['name'] = 'Name is mandatory';
        }

        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is mandatory';
        }

        if (empty($_POST['message'])) {
            $errors['message'] = 'Message is mandatory';
        }

        if (count($errors) == 0) {
            require_once 'send_mail.php';
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Full name(*)">
        <?= (isset($errors['name'])) ? $errors['name'] : ''; ?>
        <br>

        <input type="text" name="email" placeholder="Email adress(*)">
        <?= (isset($errors['email'])) ? $errors['email'] : ''; ?>
        <br>

        <input type="text" name="phone" placeholder="Phone number">
        <br>

        <input type="text" name="subject" placeholder="Subject">
        <br>

        <input type="text" name="message" placeholder="Your message(*)">
        <?= (isset($errors['message'])) ? $errors['message'] : ''; ?>
        <br>

        <small>(*) mandatory</small><br>
        <input type="submit" name="submitBtn" value="Send email">
    </form>
</body>

</html>