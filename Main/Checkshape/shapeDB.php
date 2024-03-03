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
    $result = isset($_POST["result"]) ? htmlspecialchars($_POST["result"]) : '';

        // Check if the connection is successful (assuming $objCon is defined in config.php)
        if ($objCon->connect_error) {
            die("Connection failed: " . $objCon->connect_error);
        }
        // Insert data into the database
        $sql = "INSERT INTO shapedata (shoulder, bust, waist, hip, Shape) VALUES ('$shoulder', '$bust', '$waist', '$hip','$result')";

        if ($objCon->query($sql) === TRUE) {
            // Record added successfully
            echo "Record added successfully";
           // header('rectangle.html');
            exit;
        } else {
            // Error occurred while inserting data
            echo "Error: " . $sql . "<br>" . $objCon->error;
        }
            // Close the database connection
            $objCon->close();
}
?>
