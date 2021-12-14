<?php

require_once "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Remove Users</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col text-center">
                <h1>Remove Users</h1>
            </div>
        </div>
    </div>
    <!-- USER FORM CONTAINER -->
    <div class="container" id="removeUserFormContainer">
        <div class="row justify-content-center">
            <div class="col-4 mt-3 text-center">
                <form id="removeUserForm">
                    <input type="hidden" name="action" value="do_remove">
                    <select class="form-select" id="userSelect" name="userSelect">
                        <option value="none" selected disabled> -- Select a user to remove -- </option>
                        <?php

                            require "php_action/doDBConnect.php";

                            $query = "SELECT * FROM users";

                            $connectResult = $connect->query($query);
                            while ($row = $connectResult->fetch_assoc()) {
                                $username = $row["username"];
                                if ($username == $loggedIn) {
                                    continue;
                                }
                                else {
                                    echo "<option value='$username'>" . "$username" . "</option>";
                                }
                            }

                            $connectResult->close();
                            $connect->close();

                        ?>
                    </select>
                    <button type="submit" class="btn btn-danger mt-2" name="removeUserSubmit" value="submit">Remove</button>
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
                        <strong>Success! </strong>User deleted!
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