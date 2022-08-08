<?php 

/*

	-- Exercise : 

	In this exercise, you will use the 'spotify_db' database.

	- Step 1 :
		Create two pages: 'new-song.html' and 'insert-song.php' DONE
	
	- Step 2: 'new-song.html' should contain a form to insert a new song. DONE
		You should create all the necessary inputs (title, release_date, poster, artist and category).

		For now, the artist id and category id should be an input:number and you can enter the id manually. Just make sure the id you're choosing exists in the DB.
		
	- Step 3 :
		When clicking on submit button you must do an AJAX call to the 'insert-song.php' file. DONE
		In this file, just grab the data coming from the form and display them.

		Once you displayed them in PHP, you know it works and can continue.
	
	- Step 4 :

		This script will now check if all the inputs are valid. DONE
		If there is a problem with the form display an error message (color red)
		If everything went fine, display a success message (color green)

	- Step 5 :
		If everything is ok, try to create the query to insert in the DB. DONE
		Try to execute the query and check if it works !

		CONGRATZ, YOU'VE USED AJAX TO INSERT IN THE DATABASE !


Make the dropdowns dynamic !
Now, instead of placing the values dynamically, you have to query the database to get all artists and fill the select with a loop.

For this, you have to :
	- Create a new file get-artists.php 
	- Make a second AJAX call on the same HTML file.

	Do the same for categories ! 
*/
