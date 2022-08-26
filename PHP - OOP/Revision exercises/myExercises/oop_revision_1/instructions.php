<?php

	/*
	Exercise 1 :


	We have one table : Flowers.

	In the Flowers table : 
		- id
		- name
		- price

	1. Create a page 'new-flower.php' containing a form with two (2) inputs : DONE
		- name
		- price

	2. When the submit button is clicked : DONE
		3.1 : 
			You have to declare and initialize an empty array $errors DONE
		3.2 :
			- You have to check, for each input, if it's empty or not DONE
			- If it's empty, add a new element in the array : error message. DONE
			For example, if the field 'title' is empty : 
				$errors['title'] = 'Field title is empty';
		3.3 : DONE
			After you check every input, if the array is not empty, display all the error message from the array.
			If it's empty display a message 'Form ok'

	4. Now, if all the input are ok, add a new flower to the database DONE

	5. In this part you will put all of the 'validations' (part 3 & 4) in a new file called 'addFlowersDB.php'
	You only keep the HTML form inside index.php DONE

	6. Using index.php, make an AJAX call to send the data from the form
	If it succeed print the message, if it doesn't print errors message DONE

*/
