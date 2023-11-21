<?php
// Establish database connection (modify credentials as needed)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_admin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

?>