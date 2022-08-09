<?php
echo '<hr>';
echo '<h3>Exercise 1</h3>';
/*
    -- Exercise 1 : DONE
    
    Thanks to that array : 
    $array = array(
        'lastname' => 'simon',
        'firstname' => 'simon',
        'phone' => '+3526455748'
        'email' => 'simon@simon.fr',
        'address' => '6 rue de la gare',
        'city' => 'Mondelange'
    );

    Using a loop, display the content of this array (keys and values)
*/
$info = array(
	'lastname' => 'simon',
	'firstname' => 'simon',
	'phone' => '+3526455748',
	'email' => 'simon@simon.fr',
	'address' => '6 rue de la gare',
	'city' => 'Mondelange'
);
foreach ($info as $key => $value) {
	echo $key . ': ' . $value . '<br>';
}

echo '<hr>';
echo '<h3>Exercise 2</h3>';
/*

	-- Exercise 2 : DONE
	Write a function that:
	    - Takes two arguments as numbers. 
		- Function should make sure the arguments are numbers 
	    - Check which is the largest number. 
		- RETURN the message (don't echo inside the function) 

	The expected result is this:
		If one of the arguments is not a number, display : 
			'Expecting numbers !!!';
		Else : 
		    The first number is larger (if the first number is larger than the second number)
	    	The first number is smaller (if the first number is smaller than the second number)
		    The two numbers are identical (if the two numbers are equal)
*/

function checkNum($num1, $num2){
	if(!is_numeric($num1) || !is_numeric($num2)){
		return 'Expecting numbers !!!<br>';
	} else if ($num1 > $num2) {
		return 'The first number is larger.<br>';
	} else if($num1 < $num2) {
		return 'The first number is smaller.<br>';
	} else {
		return 'The two numbers are identical.<br>';
	}
}

echo checkNum(10, 2);
echo checkNum('hello', 2);
echo checkNum(1, 2);

