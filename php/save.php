<?php

print_r($_GET);exit;
$servername = "localhost";
$dbname = "u129255652_autosecurehub";
$username = "u129255652_db_user";
$password = "Autosecurehubuser1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from URL (GET request)
// Example: your-url.php?name=John&age=30&email=john@example.com
$fname = isset($_GET['name']) ? $_GET['name'] : '';
$age = isset($_GET['age']) ? (int)$_GET['age'] : 0;
$email = isset($_GET['email']) ? $_GET['email'] : '';

$stmt = $conn->prepare("INSERT INTO leads (name, age, email) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $name, $age, $email); // "sis" means string, integer, string

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}