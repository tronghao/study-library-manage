<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'UTF8');

/* //Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/
?>