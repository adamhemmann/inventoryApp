<?php

    $dbhost = "localhost";
    $dbuser = "adam";
    $dbpass = "password";
    $dbname = "CS2830";

    // Create db connection object
    $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    // AND check connection for errors 
    if ($connect->connect_error) {
        die("Failed to connect to database : " . $connect->connect_error);
    } else {
        // echo "Connection established successfully!";
    }

?>