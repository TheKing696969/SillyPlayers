<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silly Players</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('Background.jpg');
            color: #ffffff;
        }

        header {
            background-color: #333333;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #222222;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333333;
            padding: 10px;
            text-align: center;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="HOver.css">
</head>
<body>
    <header>
        <h1>Silly Players</h1>
    </header>

    <nav>
        <a href="Home.php" class="nav-tab">Home</a>
        <a href="Episodes.php" class="nav-tab">Episodes</a>
        <a href="Tutorials.php" class="nav-tab">Tutorials</a>
        <a href="News.php" class="nav-tab">News</a>
        <a href="Contact.php" class="nav-tab">Contact</a>
        
        <?php
        // Specify the path to your text file
        $txtFilePath = 'registered_users.txt';

        // Check if the text file exists
        if (!file_exists($txtFilePath)) {
            // If the file does not exist, display the tab
            echo '<a href="Account.php" class="nav-tab">Register</a>';
        } else {
            echo'<a href="display_users.php" class="nav-tab">View Registered Users</a>';
        }
        ?>
    </nav>

    <h2>Registration Form</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
