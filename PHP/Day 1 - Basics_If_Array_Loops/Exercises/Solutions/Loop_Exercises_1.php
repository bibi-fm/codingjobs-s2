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

        $characteristics = [
                'Attack' => 15,
                'Defense' => 5
        ];

        echo "<img src='$url' width='100px'>";
        echo "<p>Last name : $lastName</p>";
        echo "<p>First name : $firstName</p>";

        foreach ($characteristics as $key => $value) {
                echo "$key : $value<br>";
        }

        ?>


        <?php

        if ($characteristics['Attack'] > 9 or $characteristics['Defense'] > 9) {
                echo '<div class="alert">
            <strong>Congratulations !</strong> Your character is ready to fight.</strong>
        </div>';
        } else if ($characteristics['Attack'] < 5 or $characteristics['Defense'] < 5) {
                echo '<div class="alert">
        <strong>Wait !</strong> Your charachter is too weeeakk!
    </div>';
        }
        ?>
</body>

</html>