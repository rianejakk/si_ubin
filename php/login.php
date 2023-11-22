<?php
require ('connect.php');

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform SQL query (modify the query based on your table structure)
    $sql = "SELECT * FROM user_admin WHERE username='$username' AND pass='$password'";
    $result = $conn->query($sql);

    // Check if the query returned a row
    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Start a session
        session_start();

        // Store user information in the session
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to the dashboard
        header("Location: ../dashboard/dashboard.php?username=".urlencode($username));
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>

