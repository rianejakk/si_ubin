<?php require ('../php/dashboard.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
            color: white;
        }

        nav {
            background-color: #444;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        section {
            margin: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="logout.php">Logout</a> <!-- Create a logout.php file for logging out -->
    </nav>
    <section>
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>Your user ID is: <?php echo $id; ?></p>
        <!-- Add more content as needed -->
    </section>
</body>
</html>
