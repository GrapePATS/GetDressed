<?php
    $servername = "sql104.infinityfree.com";
    $username = "if0_36009817";
    $password = "skdjF6kRCxCajJ";
    $dbname = "if0_36009817_user";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    
    }
?>