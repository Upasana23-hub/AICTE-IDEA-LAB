<?php
$hostname = 'localhost';  // Replace with your database hostname
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password
$database = 'login';  // Replace with your database name

// Create a connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>