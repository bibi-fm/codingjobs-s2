<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers. DONE
    - Check which is the largest number. DONE

The expected result is this:
    "The first number is higher" (if the first number is higher than the second number) DONE
    "The first number is smaller" (if the first number is smaller than the second number) DONE
    "The two numbers are identical" (if the two numbers are equal) DONE

*/
function checkNumber($x, $y)
{
	if ($x > $y) {
		echo "The first number is higher";
	} else if ($x < $y) {
		echo "The first number is smaller";
	} else {
		echo "The two numbers are identical";
	}
}

checkNumber(2, 3);

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

function image($src)
{
	echo "<img src='$src'>";
}

image("./images/sky.jpg");

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise. DONE
	    - Calculates the sum of Michel's expenses (already done) DONE
	3.2
	Write a function that will:
	- Take an array as input DONE
	- Calculate the sum of the expenses of the array DONE
	- return the sum DONE

*/

function calculateSum($arr)
{
	$sum = 0;
	foreach ($arr as $value) {
		$sum += $value;
	}
	return $sum;
}

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

echo calculateSum($array);

// PREVIOUS EXERCISE (MICHEL)
// asort($array);
// foreach ($array as $key => $value) {
// 	echo "$key : $value <br>";
// }

// krsort($array);
// echo '<pre>';
// var_dump($array);
// echo '</pre>';

// $total = 0;
// foreach ($array as $price) {
// 	$total += $price;
// }

// echo "Total spendings : $total <br>";

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
    - Takes two numbers as parameter. DONE
    - That returns the result of the multiplication of the two numbers DONE
    - All parameters must have a default value. DONE
    - Call your function with the numbers 10 and 2. DONE
    - Call your function with a single number: 4 DONE
*/

function multiply($x = 1, $y = 2)
{
	return $x * $y . "<br>";
}

echo multiply(10, 2);
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

function checkPalindrome($string)
{
	$revString = strrev($string);
	if ($revString === $string) {
		return "This is a palindrome <br>";
	} else {
		return "This is not a palindrome <br>";
	}
}

echo checkPalindrome("ana");

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercice 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

function isPrime($number)
{
	$testNum = 0;
	for ($i=2; $i < $number; $i++) { 
		if ($number % $i === 0) {
			$testNum++;
		}
	}
	if ($testNum === 0) {
		return "This is a prime number. <br>";
	} else {
		return "This is not a prime number. <br>";
	}
	// if ($number % $number === 0 && $number % 1 === 0) {
	// 	return "This is a prime number. <br>";
	// } else {
	// 	return "This is not a prime number. <br>";
	// }
}


echo isPrime(13);



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/
