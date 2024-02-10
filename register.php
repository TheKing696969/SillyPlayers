<?php
// Connect to your MySQL database
$host = 'localhost';  // e.g., 'localhost'
$username = 'root';
$password = 'yCsvi@lJ8]5/AHOw';
$database = 'mysql';

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // TODO: Add validation and secure password handling here

    // Insert registration data into the database
    $sql = "INSERT INTO registered_users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Display success message
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Username: $username</p>";
        echo '<a href="display_users.php">View Registered Users</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect back to the registration form if accessed directly
    header('Location: Account.html');
    exit();
}
?>
