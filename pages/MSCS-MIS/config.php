<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "admin-lte";

// Create a new MySQLi instance
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
