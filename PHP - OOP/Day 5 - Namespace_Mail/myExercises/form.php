<?php
if (isset($_POST['send-btn'])) {
    // Declaring form information
    $name = $_POST['name'];
    $phoneNum = $_POST['phone-num'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    $errors = false;
    if (empty($msg)) {
        echo 'Message is mandatory!<br>';
        $errors = true;
    }
    if (!empty($phoneNum)) {
        if (!is_numeric($phoneNum)) {
            echo 'Please enter a valid number!<br>';
            $errors = true;
        }
    }
    if (empty($name)) {
        echo 'Name is mandatory!<br>';
        $errors = true;
    }
    if (!is_string($name)) {
        echo 'Please enter a valid name!<br>';
        $errors = true;
    }
    if (empty($email)) {
        echo 'Email is mandatory!<br>';
        $errors = true;
    }
    if (!strpos($email, '@')) {
        echo 'Please enter a valid email!<br>';
        $errors = true;
    }

    if (!$errors) {
        echo 'Your email was sent.';
        require_once 'send_mail.php';
    } else {
        echo 'Form still contains errors, unable to send email.';
    }
}


/*$mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Contact
    </title>
</head>

<body>
    <form method="post">
        <input type="text" name="name" placeholder="Name*">
        <br>
        <input type="text" name="phone-num" placeholder="Phone number">
        <br>
        <input type="text" name="email" placeholder="Email address*">
        <br>
        <input type="text" name="subject" placeholder="Subject">
        <br>
        <textarea name="msg" id="" cols="30" rows="10" placeholder=" Message*"></textarea>
        <br>
        <p>* Mandatory fields</p>
        <button type="submit" name="send-btn">Send</button>
    </form>
</body>

</html>