<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Web Page with Image</title>
</head>
<body>
    <h1>Welcome to my web page, <?php echo $username; ?>!</h1>
    <p>Here is an image:</p>
    <img src="my_image.jpg" alt="My Image" width="200" height="200">
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
} else {
    header("Location: login.php");
}
?>
