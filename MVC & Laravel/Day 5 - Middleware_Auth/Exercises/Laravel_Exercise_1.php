<?php

/*

Let's continue our Flower exercise.

Step 1 :

	Create a form to login. This form should ask for : email and password.

Step 2 : 
	
	Once you submit the form, it should save the email in the session.
	You don't have to check if the email exists in the DB or anything like this.
	Just save it to the session.

	To save email in the session : session(['key' => 'value']);

	Once loggued in, the user should be redirected to /flowers page

	Resource : https://laravel.com/docs/9.x/session

Step 3 : 

	Create a middleware 'EnsureUserIsLoggedIn'.
	This middleware should check if the current is user is loggued in or not.
	
	Apply the EnsureUserIsLoggedIn middleware on the 'flowers/create', '/flowers/edit' and '/flowers/delete' routes.
	The middleware should redirect to login page if the email is not in the session

*/