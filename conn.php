<?php
$servername = "localhost"; // Replace with your server name if different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password if applicable
$dbname = "web"; // Replace with your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
