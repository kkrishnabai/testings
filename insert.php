<?php
// Database connection settings
$servername = "127.0.0.1
"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = "krishna"; // Change this to your database password
$dbname = "test"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch form data
$name = $_POST['name'];
$phone = $_POST['phone'];

// Insert data into database
$sql = "INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
