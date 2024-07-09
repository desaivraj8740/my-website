<?php
include 'connect.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Check if email or username already exists
$sql = "SELECT * FROM users WHERE email='$email' OR username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "This Email or Username is already taken.";
} else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful.";
            header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
