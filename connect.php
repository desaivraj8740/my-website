<?php
$servername = "sql301.infinityfree.com";
$username = "if0_36870404";
$password = "FntCcLmC73";
$dbname = "if0_36870404_user_auth";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
