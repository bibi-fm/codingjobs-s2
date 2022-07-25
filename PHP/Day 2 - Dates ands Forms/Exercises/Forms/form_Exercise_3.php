<?php


/*
    -- Exercise : 
	
		- Part 1 :
	   		Create a page "signin.php", with the following fields: DONE
	            - Last Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"
	
			When the form is being submitted, we will display the summary of what the user entered. 

		- Part 2 :

			2. Add validations on the different fields of the form:
				- The name and the first name are mandatory. DONE
				- The e-mail must be between 8 and 50 characters DONE
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters DONE

			BONUS: Make the form values ​​reappear with each submission, in case of error.
    */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page: Sign in</title>
</head>

<body>
	<form method="POST">
		<label for="last-name">Last Name:</label>
		<input type="text" name="last-name">
		<br>
		<label for="first-name">First Name:</label>
		<input type="text" name="first-name">
		<br>
		<label for="email">Email:</label>
		<input type="text" name="email">
		<br>
		<label for="password">Password:</label>
		<input type="text" placeholder="8-50 characters" name="password">
		<br>
		<label for="password-check">Password confirmation:</label>
		<input type="text" name="password-check">
		<br>
		<span>Subscribe to our Newsletter!</span>
		<input type="checkbox" name="subscription">
		<br>
		<button type="submit" name="signin-btn">Sign In</button>
	</form>
	<?php
	if (isset($_POST['signin-btn'])) {
		// echo '<pre>';
		// var_dump($_POST);
		// echo '</pre>';
		// foreach ($_POST as $key => $value) {
		// 	echo "$key: $value <br>";
		// }
		echo "<p>";
		echo "<strong>Summary</strong>" . "<br>" . "Last Name: " . $_POST['last-name'] . "<br>" . "First Name: " . $_POST['first-name'] . "<br>" . "Email: " . $_POST['email'] . "<br>" . "Password: " . $_POST['password'] . "<br>" . "Password confirmation: " . $_POST['password-check'] . "<br>";
		if (array_key_exists('subscription', $_POST)) {
			echo "Subscription: " . $_POST['subscription'];
		} else {
			echo  "Subscription: off";
		}

		echo "</p>";

		if (empty($_POST['last-name'])) {
			echo "Last name is mandatory! <br>";
		}
		if (empty($_POST['first-name'])) {
			echo "First name is mandatory! <br>";
		}
		if (strlen($_POST['email']) < 8) {
			echo "Email must be at least 8 characters! <br>";
		} else if (strlen($_POST['email']) > 50) {
			echo "Emails are limited to 50 characters! Please shorten it. <br>";
		}
		if ($_POST['password'] === $_POST['password-check']) {
			if (strlen($_POST['password']) < 8) {
				echo "Password must be at least 8 characters! <br>";
			} else {
				echo "The passwords match. <br>";
			}
		} else {
			echo "The passwords are not a match! <br>";
		}
	}

	?>

</body>

</html>