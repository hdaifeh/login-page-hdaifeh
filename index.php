<?php
// Start a session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["username"])) {
	// Redirect the user to the login page
	header("Location: login.php");
	exit();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>My Web Page with Image</title>
</head>
<body>
	<h1>Welcome to my web page!</h1>
	<p>Here is an image:</p>
	<img src="my_image.jpg.jpg" alt="My Image">
</body>
</html>
