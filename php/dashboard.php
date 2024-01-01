<?php
require ('connect.php');

// Start a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if not logged in
    header("Location: ../login/index.php");
    exit();
}

// Display user information
$id = $_SESSION['id'];
$username = $_SESSION['username'];
?>
