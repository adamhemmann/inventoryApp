<?php

require_once "php_action/doCheckLogin.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/app.css">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Custom JS -->
  <script src="js/app.js"></script>
  <title>Stock Management System</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="topNav">
    <div class="container-fluid" id="topNavContainer">
      <ul class="navbar-nav">
        <?php
        if ($loggedIn) {
          // Nav options for all users
          echo "<li class=\"nav-item\">" .
            "<a class=\"nav-link\" href=\"showInventory.php\">View Inventory Data</a></li>";
          // Nav options for admins only
          if ($_SESSION["isAdmin"] == 1) {
            echo "<li class=\"nav-item\">" .
              "<a class=\"nav-link\" href=\"editInventory.php\">Edit Inventory Data</a></li>";
            echo "<li class=\"nav-item\">" .
              "<a class=\"nav-link\" href=\"addUsers.php\">Add Users</a></li>";
            echo "<li class=\"nav-item\">" .
              "<a class=\"nav-link\" href=\"removeUsers.php\">Remove Users</a></li>";
          } else {
            echo "<li class=\"nav-item\">" .
              "<a class=\"nav-link disabled\" href=\"#\">Edit Inventory Data</a></li>";
            echo "<li class=\"nav-item\">" .
              "<a class=\"nav-link disabled\" href=\"#\">Add Users</a></li>";
            echo "<li class=\"nav-item\">" .
              "<a class=\"nav-link disabled\" href=\"#\">Remove Users</a></li>";
          }
        }
        if (!$loggedIn) {
          echo "<li class=\"nav-item\">" .
            "<a class=\"navbar-brand\" href=\"https://www.mpix.com\" target=\"_blank\">" .
            "<img src=\"img/mpixLogoRed.jpg\" alt=\"\" width=\"60\"></a></li>";
          echo "<li class=\"nav-item\">" .
            "<a class=\"navbar-brand\" href=\"http://www.millerslab.com\" target=\"_blank\">" .
            "<img src=\"img/millersLogo.jpg\" alt=\"\" width=\"50\"></a></li>";
        }
        ?>
      </ul>
      <?php
      if ($loggedIn) {
        echo "<form class=\"d-flex\" id=\"appLogoutForm\">";
        echo "<input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"Log out\"></input>";
        echo "</form>";
      }
      ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>