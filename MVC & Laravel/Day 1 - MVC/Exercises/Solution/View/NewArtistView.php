<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Artist</title>
</head>

<body>
    <h2>Insert a new artist</h2>

    <?php
    if (!empty($errors)) {
        foreach ($errors as $key => $err) {
            echo "Problem with $key : '$err'<br>";
        }
    }

    if (isset($msg))
        echo $msg;
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Artist name"><br>
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="text" name="birth_year" placeholder="Birth year"><br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="submitBtn" value="Insert">
    </form>
</body>

</html>