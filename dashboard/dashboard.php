<?php require ('../php/dashboard.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
    <header>
        <div class="dashboard-title">Dashboard</div>
        <div class="user-info">Welcome, <?php echo htmlspecialchars($username); ?>!</div>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a id="logout-link" href="../php/logout.php">Logout</a> <!-- Create a logout.php file for logging out -->
    </nav>
    <section>
        <!-- Add more content as needed -->
    </section>
</body>
</html>
