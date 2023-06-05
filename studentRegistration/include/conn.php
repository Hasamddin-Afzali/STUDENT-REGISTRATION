<?php
// Database credentials
$host = "localhost"; // database host
$user = "root"; // database username
$password = ""; // database password
$database = "studentregistration"; // database name

// Establish a connection to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>