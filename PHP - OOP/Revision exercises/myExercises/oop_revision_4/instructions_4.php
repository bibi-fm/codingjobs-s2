<?php 

/*

You work for a local animal shelter. You must redesign their website.
You have to create a class named Cat() with the following properties:
	- Name (string - 3 to 20 characters)
	- Age (int)
	- Color (string - 3 to 10 characters)
	- Sex (string - male or female)
	- Breed (string - 3 to 20 characters)

1. Make the getters/setters to validate the above data type. You also have to create the class
constructor in order to instantiate the class. DONE

2. Add a getInfos() method to return all the properties as an array. DONE

3. In a new file, instantiate the class to display 3 different cats and display the result with the
getInfos() method previously created. DONE

*/

/*public function getInfos() {
	// $properties = array();

	$properties =  array(
		$this->name,
		$this->age,
		...
	);

	return $properties;
}

foreach(getInfos() as $value) {
	echo $value . '<br>';
}