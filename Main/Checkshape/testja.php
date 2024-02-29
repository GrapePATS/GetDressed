<?php
session_start();
require_once 'config.php'; // Make sure this file contains your database connection details

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $shoulder = isset($_POST["shoulder"]) ? htmlspecialchars($_POST["shoulder"]) : '';
    $bust = isset($_POST["bust"]) ? htmlspecialchars($_POST["bust"]) : '';
    $waist = isset($_POST["waist"]) ? htmlspecialchars($_POST["waist"]) : '';
    $hip = isset($_POST["hip"]) ? htmlspecialchars($_POST["hip"]) : '';

    // Check if the connection is successful (assuming $conn is defined in config.php)
    if ($objCon->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO shapedata(shoulder, bust, waist, hip) VALUES ('$shoulder', '$bust', '$waist', '$hip')";

    if ($objCon->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $objCon->close();
}
?>
