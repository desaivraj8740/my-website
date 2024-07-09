<?php
// index.php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// User is authenticated, show the homepage content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Welcome to Our Website</h1>
    
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>

    <!-- Other homepage content -->

    <a href="logout.php">Logout</a>
</body>
</html>
