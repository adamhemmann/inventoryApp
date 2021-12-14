<?php
	
	if(!session_start()) {
		require "../error.php";
		exit;
	}	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        
        require_once 'doDBConnect.php';
        
        // http://php.net/manual/en/mysqli.real-escape-string.php
        $username = $connect->real_escape_string($username);
        $password = $connect->real_escape_string($password);
        $password = sha1($password); 
        
		$query = "SELECT * FROM users WHERE username = \"$username\" AND password = \"$password\"";
		$connectResult = $connect->query($query);

        if ($connectResult->num_rows == 1) {
            while ($row = $connectResult->fetch_assoc()) {
                // Storing all user info db values in $_SESSION for access on all pages
                $_SESSION["loggedIn"] = $row["username"];
                $_SESSION["changeDate"] = $row["changeDate"];
                $_SESSION["firstName"] = $row["firstName"];
                $_SESSION["lastName"] = $row["lastName"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["jobTitle"] = $row["jobTitle"];
                $_SESSION["isAdmin"] = $row["admin"];
            }

            $connectResult->close();
            $connect->close();
        } else {
            echo "error";
            
            $connectResult->close();
            $connect->close();
        }
	}
	
	function login_form() {
		$username = '';
		$error = '';
		require '../index.php';
        exit;
	}
	
?>