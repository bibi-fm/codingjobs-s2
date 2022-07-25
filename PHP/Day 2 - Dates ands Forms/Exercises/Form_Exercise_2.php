<?php


/* -- Exercise : 
	2.1 (Already done in previous exercise) :
	Write a PHP script that gives the multiplication table of 2.
	Multiplication table from 1 to 10.
*/
for ($i = 1; $i <= 10; $i++) {
	$multiplicationTable[$i] = $i * 2;
}

foreach ($multiplicationTable as $key => $value) {
	echo "$key : $value <br>";
}
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>

<body>
	<!-- 2.2 : Edit this script to give the multiplication table of any number ($x for example) in a HTML table -->
	<?php
	$x = 30;
	$range = 10;
	$i = 1;
	while ($i <= $range) {
		echo "$i: " . $x * $i . "<br>";
		$i++;
	}
	echo "<br>";
	?>
	<!-- 2.3 : Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (numeric value). -->
	<form method="POST">
		<input type="text" name="number">
		<button type="submit" name="submitBtn">Search</button>
	</form>
	<?php
	if (isset($_POST['submitBtn'])) {

		if (is_numeric($_POST['number'])) {
			for ($i = 1; $i <= 10; $i++) {
				echo $_POST['number'] * $i . "<br>";
			}
		} else {
			echo "Value must be a number!";
		}
	}
	?>
	<!-- 2.4 :
	Display the multiplication table in a nice HTML format table style. -->
	<?php
	echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row = 1; $row <= 10; $row++) {
		echo "<tr> \n";
		for ($col = 1; $col <= 10; $col++) {
			$p = $col * $row;
			echo "<td>$p</td> \n";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>





</body>

</html>