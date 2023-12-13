<?php
// Establish database connection
// require ('connect.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the number of names to display per page
$namesPerPage = 5;

// Get the current page from the URL
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting index for fetching names
$startIndex = ($page - 1) * $namesPerPage;

// Fetch names from the database
$sql = "SELECT * FROM data_mitra LIMIT $startIndex, $namesPerPage";
$result = $conn->query($sql);

$names = [];
while ($row = $result->fetch_assoc()) {
    $names[] = $row['Nama'];
}

// Return the names as JSON
echo json_encode($names);

$conn->close();
?>
