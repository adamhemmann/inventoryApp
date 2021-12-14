<?php

if(!session_start()) {
    header("Location: ../error.php");
    exit;
}

$loggedIn = empty($_SESSION["loggedIn"]) ? false : $_SESSION["loggedIn"];

?>