<?php
// Start a session
session_start();

// Set the correct username and password
$correct_username = "myusername";
$correct_password = "mypassword";

// Get the entered username and password from the form submission
$entered_username = $_POST["username"];
$entered_password = $_POST["password"];

// Check if the entered username and password are correct
if ($entered_username == $correct_username && $entered_password == $correct_password) {
	// If the login is successful, redirect the user to the homepage
	$_SESSION["username"] = $entered_username; // Store the username in a session variable
	header("Location: index.php"); // Redirect to the homepage
	exit();
} else {
	// If the login is not successful, show an error message
	echo "Incorrect username or password.";
}
?>
