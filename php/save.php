<?php

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$servername = "localhost";
$dbname = "u129255652_autosecurehub";
$username = "u129255652_db_user";
$password = "Autosecurehubuser1";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $zip = $_POST["zip"];
    $leadid_token = $_POST["universal_leadid"];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO leads (lead_id, fname, lname, email, phone, zip_code) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $leadid_token, $fname, $lname, $email, $phone, $zip); // "sis" means string, integer, string

    // Execute the query
    if ($stmt->execute()) {
        $_SESSION['success'] = true;
        $_SESSION['message'] = 'Data saved successfully.';
    } else {
        $_SESSION['success'] = false;
        $_SESSION['message'] = 'Unknown error occured while saving data: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    $fname = urlencode($_POST["fname"]);
    $lname = urlencode($_POST["lname"]);
    $email = urlencode($_POST["email"]);
    $caller_id = urlencode($_POST["phone"]);
    $zip = urlencode($_POST["zip"]);
    $leadid_token = urlencode($_POST["universal_leadid"]);
    $traffic_source_id = urlencode($_POST["traffic_source_id"]);
    $source_url = urlencode($_POST["source_url"]);
    // $leadid_tcpa_disclosure = urlencode($_POST["leadid_tcpa_disclosure"] == 'on' ? true : false);

    $api_url = "https://global-digital-media.trackdrive.com/api/v1/leads/capture";
    $api_params = "jornaya_leadid=$leadid_token&traffic_source_id=$traffic_source_id&caller_id=$caller_id&source_url=$source_url&first_name=$fname&last_name=$lname&zip=$zip&email=$email";

    $ch = curl_init($api_url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $api_params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        die("cURL Error: " . curl_error($ch));
    } else {
        // Handle the API response (you can print or process it as needed)
        print_r("API Response: " . $response);
    }

    // Close cURL session
    curl_close($ch);
}
header("Location: https://autosecurehub.com/");
exit();