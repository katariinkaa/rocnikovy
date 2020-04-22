<?php

// Starting the session, necessary 
// for using session variables 
session_start();

// Declaring and hoisting the variables 
$username = "";
$email = "";
$userid = "";
$email = "";
$roles="";
$tokens="";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname, 
// username, password, database name 
$db = mysqli_connect('localhost', 'root', '', 'nekupujnove.sk');

// Registration code 
if (isset($_POST['reg_user'])) {

	// Receiving the values entered and storing 
	// in the variables 
	// Data sanitization is done to prevent 
	// SQL injections 
	$username = mysqli_real_escape_string($db, $_POST['user_name']);
	$email = mysqli_real_escape_string($db, $_POST['user_email']);
	$userid = mysqli_real_escape_string($db, $_POST['user_id']);
	$roles = mysqli_real_escape_string($db, $_POST['user_roles']);
	$tokens = mysqli_real_escape_string($db, $_POST['user_tokens']);
	$password_1 = mysqli_real_escape_string($db, $_POST['user_pass_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['user_pass_2']);

	// Ensuring that the user has not left any input field blank 
	// error messages will be displayed for every blank input 
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
		// Checking if the passwords match 
	}

	// If the form is error free, then register the user 
	if (count($errors) == 0) {

		// Password encryption to increase data security 
		$password = md5($password_1);

		// Inserting data into table 
		$query = "INSERT INTO users (user_name, user_email, user_pass, user_roles) 
				VALUES('$username', '$email', '$password', 'user')";

		mysqli_query($db, $query);


		// Storing username of the logged in user, 
		// in the session variable 
		$_SESSION['user_name'] = $username;
		$_SESSION['user_email'] = $email;
		$_SESSION['user_id'] = $userid;
		$_SESSION['user_roles'] = $roles;
		$_SESSION['user_tokens'] = $tokens;



		// Welcome message 
		$_SESSION['success'] = "you have logged in";

		// Page on which the user will be
		// redirected after logging in
		header('location: index.php');
	}
}

// User login
if (isset($_POST['login_user'])) {

	// Data sanitization to prevent SQL injection
	$username = mysqli_real_escape_string($db, $_POST['user_name']);
	$password = mysqli_real_escape_string($db, $_POST['user_pass']);

	// Error message if the input field is left blank
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {

		// Password matching
		$password = md5($password);

		$query = "SELECT * FROM users WHERE user_name= 
				'$username' AND user_pass='$password'";
		$results = mysqli_query($db, $query);

		// $results = 1 means that one user with the
		// entered username exists
		if (mysqli_num_rows($results) == 1) {

			$users = mysqli_fetch_assoc($results) ;
//ukladaj
			$userid = $users['user_id'];
			$username = $users['user_name'];
			$email = $users['user_email'];
			$roles = $users['user_roles'];
			$tokens = $users['user_tokens'];


			// Storing username in session variable
			$_SESSION['user_name'] = $username;
			$_SESSION['user_id'] = $userid;
			$_SESSION['user_email'] = $email;
			$_SESSION['user_roles'] = $roles;
			$_SESSION['user_tokens'] = $tokens;

			// Welcome message
			$_SESSION['success'] = "you HAve loGGed in!";

			// Page on which the user is sent
			// to after logging in
			if($roles=='user'){
				header('location: konto.php');
			}
			else if($roles='admin'){
				header('location: admin.php');
			}

		}
		else {

			// If the username and password doesn't match 
			array_push($errors, "Username or password incorrect");
		}
	}
}
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

?> 
