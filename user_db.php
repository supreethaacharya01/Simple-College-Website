<?php
// Database connection settings
$host = 'localhost';  // Usually localhost for XAMPP
$db_name = 'user_db';  // Your database name
$username = 'root';    // Default username for XAMPP MySQL
$password = '';        // Default password for root user in XAMPP is blank

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
