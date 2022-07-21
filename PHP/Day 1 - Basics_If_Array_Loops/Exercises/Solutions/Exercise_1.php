<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Exercise</title>
</head>

<body>
    <?php

    $url = "banana.png";
    $lastName = 'Banana';
    $firstName = 'Guy';
    $atkPoints = 15;
    $defPoints = 5;

    /*echo "<img src='$url' width='100px'>";
    echo "<p>Last name : $lastName</p>";
    echo "<p>First name : $firstName</p>";
    echo "<p>Attack points : $atkPoints</p>";
    echo "<p>Defense points : $defPoints</p>";*/
    ?>

    <img src="<?php echo $url; ?>" width="100px">
    <p>Last name : <?= $lastName; ?></p>
    <p>First name : <?php echo $firstName; ?></p>
    <p>Attack points : <?php echo $atkPoints; ?></p>
    <p>Defense points : <?php echo $defPoints; ?></p>

    <?php

    if ($atkPoints > 9 or $defPoints > 9) {
        echo '<div class="alert">
            <strong>Congratulations !</strong> Your character is ready to fight.</strong>
        </div>';
    } else if ($atkPoints < 5 or $defPoints < 5) {
        echo '<div class="alert">
        <strong>Wait !</strong> Your charachter is too weeeakk!
    </div>';
    }
    ?>
</body>

</html>