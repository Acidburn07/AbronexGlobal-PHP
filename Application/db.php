<?php
$servername = "localhost";
$username = "amk1010360";
$password = "ViYIlHZK";
$dbname = "wp_amk1010360";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Connection successful (optional echo)
// echo "Database connected successfully!";
?>
