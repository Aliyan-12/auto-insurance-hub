<?php

$servername = "localhost";
$dbname = "u129255652_autosecurehub";
$username = "u129255652_db_user";
$password = "Autosecurehubuser1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    print_r("Connection failed: " . $conn->connect_error);exit;
}

// Get data from URL (GET request)
// Example: your-url.php?name=John&age=30&email=john@example.com
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$zip_code = $_GET['zip_code'];

print_r($fname, $lname);exit;

$stmt = $conn->prepare("INSERT INTO leads (name, age, email) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $name, $age, $email); // "sis" means string, integer, string

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}