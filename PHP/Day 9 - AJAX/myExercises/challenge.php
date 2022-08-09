<?php
$array = [5, 2, 3, 6, 7, 15];
function Fizzbuzz($n)
{
	if ($n % 3 === 0 && $n % 5 === 0) {
		echo 'TicTac';
	} else if ($n % 5 === 0) {
		echo 'Buzz';
	} elseif ($n % 3 === 0) {
		echo 'Fizz';
	} else {
		echo $n;
	}
}
foreach ($array as $value) {
	echo Fizzbuzz($value) . '<br>';
}
/*

We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements. You can use this variable).

$array = [5, 2, 3, 6, 7];

Examples :

	Write a function call 'FizzBuzz'.
	For each number 'n' of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'TicTac'
		. else : display the number 'n'
*/
