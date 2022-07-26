<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include files</title>
</head>

<body>
    <?php
    // Include a file -> warning if errors
    // include_once 'nazerazerazav.html';

    // Require a file -> STOP the script if errors
    require_once 'nav.html';

    ?>

    <h1>Beautiful page</h1>

    <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt maiores dolores quia. Fugit alias non impedit velit, sunt quam reprehenderit aliquam nisi obcaecati accusantium atque deserunt blanditiis sint quia aliquid.</p>
    </div>

    <div class="content">
        <?php require_once 'movies.txt'; ?>
    </div>

    <?php include 'footer.html'; ?>
</body>

</html>