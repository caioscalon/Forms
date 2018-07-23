<?php

    $servername = "localhost";
    $username = "forms_user";
    $password = "L5xzCW4U";
    $dbname = "sms_forms";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

?>