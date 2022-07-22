<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form exercise 1 - Part 2</title>
</head>

<body>

    <?php
    // Make sure I clicked on the submit btn
    if (isset($_POST['submitBtn'])) {
        $timestampsNow = strtotime('now');
        $timestampsDate = strtotime($_POST['myDate']);

        $difference = $timestampsNow - $timestampsDate;
        echo 'Difference in seconds : ' . $difference;
    }
    ?>

    <form method="post">
        <label for="myDate">Choose a date: </label>
        <input type="date" name="myDate" id="myDate"><br>
        <input type="submit" name="submitBtn" value="Submit">
    </form>

</body>

</html>