<?php


/*

	Doc : https://laravel.com/docs/9.x/authentication

	Goal of this exercise is to implement authentication inside Laravel.
    
	Step 1 : 

		Implements the authentication in the Flower App

	Step 2 :

		Change the user migration.
		User table should now have those columns :
			- first_name (string)
			- last_name (string)
			- city (string)
			- postal code (numeric)
			- email
			- email_verified_at
			- password
			- remember token
			- updated_at
			- created_at

		You also have to edit the register form to match.

	Step 3 :

		Create a 'home.blade.php' page
		This page will display a welcome message and links to register/login page.

		When the user is not loggued in, he should be redirect to this page.
		
		PS : Do not use welcome.blade.php view.

	Step 4 :

		Create an account page.
		Display all informations about users (except password).
		
		This page is accessible only by the loggued in user.
		If user try to access without being connected, redirect to home page.
