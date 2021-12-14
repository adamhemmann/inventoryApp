<?php

if ($_POST["action"] == "do_remove") {
    $username = empty($_POST["userSelect"]) ? "" : $_POST["userSelect"];

    require "doDBConnect.php";

    if ($connect->connect_error) {
        echo "error";
        
        $connect->close();
    } 
    else {
        $query = "DELETE FROM users WHERE username = \"$username\";";
        $connect->query($query);

        echo "success";
        
        $connect->close();
    }
}

?>