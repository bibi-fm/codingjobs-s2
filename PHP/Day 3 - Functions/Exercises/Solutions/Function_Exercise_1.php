<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

function whichIsGreater($x, $y)
{
	if ($x > $y)
		echo "The first number is higher : $x";
	elseif ($x < $y)
		echo "The second number is higher : $y";
	else
		echo "Both values are equal : $x / $y";
}

whichIsGreater(5, 10);


/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    "The first number is higher" (if the first number is higher than the second number)
    "The first number is smaller" (if the first number is smaller than the second number)
    "The two numbers are identical" (if the two numbers are equal)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*

-- Exercice 2
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

function htmlImages($src)
{
	echo "<img src='$src' height='100px' />";
}

htmlImages("https://c.tenor.com/4PhnrkMR9yEAAAAd/mr-bean-silly.gif");



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise.
	    - Calculates the sum of Michel's expenses (already done)
	3.2
	Write a function that will:
	- Take an array as argument
	- Calculate the sum of the expenses of the array
	- return the sum

*/

function calculateExpanses($arr)
{
	$total = 0;
	foreach ($arr as $price) {
		$total += $price;
	}

	return $total;
}

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

echo 'Total is : ' . calculateExpanses($array);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

function multiply($x = 1, $y = 2)
{
	$result = $x * $y;
	return $result;
}

echo multiply(10, 5) . '<br>';
echo multiply(4);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

function isPalindrome($str)
{
	$len = strlen($str) - 1;

	for ($i = 0; $i <= $len / 2; $i++) {
		// echo 'Element on the left : ' . $str[$i] . '<br>';
		// echo 'Element on the right : ' . $str[$len - $i];
		// echo '<hr>';

		if ($str[$i] != $str[$len - $i])
			return 'Not a palindrome !';
	}

	return 'Its a palindrome !';
}

echo isPalindrome('kayak');


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercice 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/


function isPrimeNumber($myNumber)
{

	for ($i = 2; $i < $myNumber; $i++) {
		if ($myNumber % $i == 0)
			return 'Not a prime number';
	}
	return 'Its a prime number';
}

echo isPrimeNumber(13);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/


// $temp = $array[0]; // 5
// $array[0] = $array[5]; // 2 
// $array[5] = $temp; // 5
// [$array[0], $array[5]] = [$array[5], $array[0]];

function reverseArray($array)
{
	$len = count($array) - 1;

	for ($i = 0; $i <= $len / 2; $i++) {
		$temp = $array[$i];
		$array[$i] = $array[$len - $i];
		$array[$len - $i] = $temp;
	}

	return $array;
}


$array = [5, 10, 13, 8, 7, 2];

var_dump(reverseArray($array));
