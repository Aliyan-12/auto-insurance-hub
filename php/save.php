<?php

session_start();

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
$leadId = $_GET['Jornaya_leadId'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$zip_code = $_GET['zip_code'];

$stmt = $conn->prepare("INSERT INTO leads (lead_id, fname, lname, email, phone, zip_code) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $leadId, $fname, $lname, $email, $phone, $zip_code); // "sis" means string, integer, string

// Execute the query
if ($stmt->execute()) {
    $_SESSION['success'] = true;
    $_SESSION['message'] = 'Data saved successfully.';
} else {
    $_SESSION['success'] = false;
    $_SESSION['message'] = 'Unknown error occured while saving data.';
}

$stmt->close();
$conn->close();

header("Location: https://autosecurehub.com");
exit();