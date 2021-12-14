<?php 
    require_once "header.php";

    if ($loggedIn) {
		header("Location: dashboard.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Database Login</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col text-center">
                <p>Welcome to my inventory management app!</p>
                <p>Please log in to continue</p>
                <p>The links on the navbar above will take you to the Miller's and Mpix pages</p>
                <p>The embedded video below will tell you a little more about the company</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 text-center">
                <form class="mt-1" id="appLoginForm">
                    <input type='hidden' name='action' value='do_login'>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter username">
                        <label for="username">Enter username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
                        <label for="password">Enter password</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </form>
            </div>
        </div>
        <!-- MESSAGE CENTER -->
        <div class="container messageCenterContainer">
            <div class="row justify-content-center">
                <div class="col-4 mt-3" id="messageCenter">
                    <div class="alert alert-success d-none" id="alertSuccess">
                        <button type="button" class="btn-close alertClose"></button>
                            <strong>Success! </strong>Item updated successfully!
                    </div>
                        
                    <div class="alert alert-danger d-none" id="alertError">
                        <button type="button" class="btn-close alertClose"></button>
                            <strong>Error! </strong>Incorrect username or password.
                    </div>
                </div>
            </div>
        </div>
        <div class="container videoContainer">
            <div class="row justify-content-center">
                <div class="col mt-3 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="1000" height="563" src="https://www.youtube.com/embed/lScKELb4czM" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>