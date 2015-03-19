<?php session_start(); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php
	print("hellO");
	// This file will deal with the administrative logging in
	
	// TODO: Login form

	// TODO: Check whether the form inputs are set

	// TODO: Do POST get on username and password, process input (strip tags) and get hash value for password
	// TODO: Call function validate_credentials() on the given username and hash value of password

	function validate_credentials($username, $hashPassword) {
		// TODO: Check if username and password match the correct hard coded values for the admin account
		// TODO: If they are valid credentials, then begin the SESSION and set the logged_user as the admin username
		// TODO: If invalid credentials, display an appropriate error message 
	}

	//TODO: Logout form

	// TODO: If user is logged in (logged_user = admin), display the logout form (logout button)

	// TODO: If logout button is pressed then call the function logoutUser()

	function logoutUser() {
		// TODO: unset the logged_user and terminate the session
	}
?>
</html>