<?php
$host = 'localhost';
$user = 'root';
$pass = 'mysql';
$dbname = 'milestone';

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";