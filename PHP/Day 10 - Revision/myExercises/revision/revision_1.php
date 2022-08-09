<?php

/*
	1. Display the type of each variable at the end of the script (using only one function) DONE
	2. Display the type AND the value of each variable (using only one function) DONE
*/



echo '<h3>Exercise 1</h3>';
$types = [
	'Hello',
	9,
	true,
	1.5,
	['Friend', 'Morning'],
];
foreach ($types as $type) {
	echo gettype($type) . '<br>';
	var_dump($type) . '<br>';
	echo '<br>';
	echo '<br>';
}

echo '<hr>';

/*
	Show the date (in a nice format) for :
		- Today DONE
		- Tomorrow DONE 
		- The same date than today one month later DONE
*/
echo '<h3>Exercise 2</h3>';

echo 'Today: ' . date('d/m/Y H:i:s') . '<br>';

$tomorrow = strtotime('+1 day') . '<br>';
echo 'Tomorrow: ' . date('d/m/Y H:i:s', intval($tomorrow)) . '<br>';

$nextM = strtotime('next month');
echo 'Next month: ' . date('d/m/Y H:i:s', intval($nextM)) . '<br>';





echo '<hr>';
/*
	Create an array with the numbers from 1 to 100 : Create it dynamically using a loop. DONE
		- Once it has been created, display it in a HTML list (ul/li)
		- Use one loop to create the array.
		- Use a second loop to display it.
*/
echo '<h3>Exercise 3</h3>';

$numbers = [];
//echo count($numbers);
for ($i = 1; $i <= 100; $i++) {
	$numbers[] = $i;
}

/*echo '<pre>';
var_dump($numbers);
echo '</pre>';*/

echo '<ul>';
foreach ($numbers as $number) {
	echo "<li>$number</li>";
}
echo '</ul>';

echo '<hr>';

echo '<h3>Exercise 4</h3>';

/*
	Practice query using the moviedb :
	1. Connect to DB and choose the moviedb DONE
	2. Go to SQL tab and run a query to get all movies by George Lucas DONE
	3. Display the movies in a HTML <table> DONE
		You should display title, views, the poster and the name of the director.
*/
$conn = mysqli_connect('localhost', 'root', '', 'movies_db');
$query = "SELECT * FROM movies INNER JOIN directors ON director_id = directors.id WHERE director_id=2;";
$results = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

/*echo '<pre>';
var_dump($movies);
echo '</pre>';

foreach ($movies as $movie) {
	echo $movie['title'] . ' <br>';
	echo $movie['views'] . 'K views<br>';
	echo $movie['poster'] . ' <br>';
	echo $movie['name'] . ' <br>';
	echo '<hr>';
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercises</title>
	<style type="text/css">
		.tg {
			border-collapse: collapse;
			border-spacing: 0;
		}

		.tg td {
			border-color: black;
			border-style: solid;
			border-width: 1px;
			font-family: Arial, sans-serif;
			font-size: 14px;
			overflow: hidden;
			padding: 10px 5px;
			word-break: normal;
		}

		.tg th {
			border-color: black;
			border-style: solid;
			border-width: 1px;
			font-family: Arial, sans-serif;
			font-size: 14px;
			font-weight: normal;
			overflow: hidden;
			padding: 10px 5px;
			word-break: normal;
		}

		.tg .tg-baqh {
			text-align: center;
			vertical-align: top
		}

		.tg .tg-0lax {
			text-align: left;
			vertical-align: top
		}

		.poster {
			width: 100px;
			height: 150px;
		}

	</style>
</head>

<body>
	<table class='tg'>
		<thead>
			<tr>
				<th class='tg-baqh' colspan='5'>Movies</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="tg-0lax">title</td>
				<td class="tg-0lax">poster</td>
				<td class="tg-0lax">views</td>
				<td class="tg-0lax">director</td>
			</tr>
			<?php foreach ($movies as $movie) : ?>
				<tr>
					<td class="tg-0lax"><?= $movie['title'] ?></td>
					<td class="tg-0lax"><img src="../uploaded_files/<?= $movie['poster']?>" class="poster"></td>
					<td class="tg-0lax"><?= $movie['poster'] ?></td>
					<td class="tg-0lax"><?= $movie['name'] ?></td>
				</tr>
			<?php endforeach ?>

		</tbody>
	</table>


</body>

</html>