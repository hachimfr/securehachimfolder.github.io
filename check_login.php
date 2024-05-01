<?php


// Set the username and password to be checked
$username = $_POST['username'];
$password = $_POST['password'];

// Set the correct username and password
$correct_username = 'hachim';
$correct_password = 'hachim';

// Check if the username and password are correct
if ($username == $correct_username && $password == $correct_password) {
	// Save the login information to a text file
	$file = fopen("login_info.txt", "w");
	fwrite($file, $username . ":" . $password);
	fclose($file);

	// Redirect to the welcome page
	header("Location: welcome.html");
} else {
	// Save the incorrect login information to a text file
	$file = fopen("login_info.txt", "w");
	fwrite($file, $username . ":" . $password . " (Incorrect)");
	fclose($file);

	// Display an error message
	echo "Invalid username or password.";
}

?>