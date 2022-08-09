<?php
/*
	Practice query using the moviedb :
	1. Connect to DB and choose the moviedb DONE
	2. Go to SQL tab and run a query to get all movies by George Lucas
	3. Display the movies in a HTML <table> DONE
		You should display title, views, the poster and the name of the director.
*/
$conn = mysqli_connect('localhost', 'root', '', 'movies_db');
$query = "SELECT * FROM movies INNER JOIN directors ON director_id = directors.id";
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
				<td class="tg-0lax">views</td>
				<td class="tg-0lax">poster</td>
				<td class="tg-0lax">director</td>
			</tr>
			<?php foreach ($movies as $movie) : ?>
				<tr>
					<td class="tg-0lax"><?= $movie['title'] ?></td>
					<td class="tg-0lax"><img src="./uploaded_files/<?= $movie['poster']?>" class="poster"></td>
					<td class="tg-0lax"><?= $movie['poster'] ?></td>
					<td class="tg-0lax"><?= $movie['name'] ?></td>
				</tr>
			<?php endforeach ?>

		</tbody>
	</table>


</body>

</html>