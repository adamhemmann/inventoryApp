<?php

require "doDBConnect.php";

if ($_POST["action"] == "do_create"){
    $firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
    $lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
    $username = empty($_POST['username']) ? '' : $_POST['username'];
    $password = empty($_POST['password']) ? '' : $_POST['password'];
    $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
    $email = empty($_POST['email']) ? '' : $_POST['email'];
    $admin = isset($_POST['admin']) ? '1' : '0';

    $goodInput = true;

    if ($password != $confirmPass) {
        echo "error";
        $goodInput = false;
        exit;
    }

    if ($goodInput) {
        // Connect to db
        require "doDBConnect.php";
        // Check for connection errors
        if ($connect->connect_error) {
            echo "error";
            exit;
        }

        // http://php.net/manual/en/mysqli.real-escape-string.php
        $username = $connect->real_escape_string($username);
        $password = $connect->real_escape_string($password);

        $password = sha1($password);

        $query = "INSERT INTO users (username, password, changeDate, firstName, lastName, email, admin) 
                    VALUES ('$username', '$password', NOW(), '$firstName', '$lastName', '$email', '$admin');";
        $connect->query($query);

        if ($connect->error) {
            echo "error";
            $connect->close();
        } 
        else {
            echo "success";
            $connect->close();
        }
    }
}
?>