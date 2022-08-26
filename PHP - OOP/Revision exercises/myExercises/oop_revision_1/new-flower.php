<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flower</title>
</head>

<body>
    <form method="post">
        <input type="text" name="flower-name" placeholder="Name">
        <input type="text" name="flower-price" placeholder="Price">
        <button type="submit" name="add-btn">Add Flower</button>
    </form>
    <div id='flower-results'></div>
    <script>
        document.querySelector("form").addEventListener('submit', function(event) {
            // Prevent the page to refresh
            event.preventDefault();
            let data = this;

            fetch('addFlowersDB.php', {
                    method: 'post',
                    body: new FormData(data)
                }).then(res => res.text())
                .then(function(result) {
                    console.log(result);
                    document.getElementById('flower-results').innerHTML = result;
                });
        });
    </script>
</body>

</html>