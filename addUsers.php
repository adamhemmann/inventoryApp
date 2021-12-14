<?php

require_once "header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Users</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col text-center">
                <h1>Add Users</h1>
            </div>
        </div>
    </div>
    <!-- USER FORM CONTAINER -->
    <div class="container" id="addUserFormContainer">
        <div class="row justify-content-center">
            <div class="col-4 mt-3">
                <form id="createUserForm">
                    <input type="hidden" name="action" value="do_create">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required>
                        <label for="firstName">First name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required>
                        <label for="lastName">Last name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="password" id="confirmPass" name="confirmPass" class="form-control" placeholder="Confirm password" required>
                        <label for="confirmPass">Confirm password</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="jobTitle" name="jobTitle" class="form-control" placeholder="Job title">
                        <label for="jobTitle">Job title</label>
                    </div>
                    <div class="form-floating mb-2 mt-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="admin" name="admin" value="1">
                        <label class="form-check-label">Grant Admin Privileges</label>
                    </div>
                    <button type="submit" class="btn btn-success mt-1" name="createUserSubmit">Add</button>
                </form>
            </div>
        </div>
    </div>

    <!-- MESSAGE CENTER -->
    <div class="container messageCenterContainer">
        <div class="row justify-content-center">
            <div class="col-4 mt-3" id="messageCenter">
                <div class="alert alert-success d-none" id="alertSuccess">
                    <button type="button" class="btn-close alertClose"></button>
                    <strong>Success! </strong>User added!
                </div>

                <div class="alert alert-danger d-none" id="alertError">
                    <button type="button" class="btn-close alertClose"></button>
                    <strong>Error! </strong>Something went wrong.
                </div>
            </div>
        </div>
    </div>

</body>

</html>