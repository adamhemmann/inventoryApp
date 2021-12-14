<?php

    require "doDBConnect.php";

    $dbID = $_POST["dbID"];
    $productName = empty($_POST["productName"]) ? "" : $_POST["productName"];
    $productID = empty($_POST["productID"]) ? "" : $_POST["productID"];
    $productDescription = empty($_POST["productDescription"]) ? "" : $_POST["productDescription"];
    $productSize = empty($_POST["productSize"]) ? "" : $_POST["productSize"];
    $vendor = empty($_POST["vendor"]) ? "" : $_POST["vendor"];
    $qtyReceived = empty($_POST["qtyReceived"]) ? "0" : $_POST["qtyReceived"];
    $qtyWarehouse = empty($_POST["qtyWarehouse"]) ? "0" : $_POST["qtyWarehouse"];
    $qtyProduction = empty($_POST["qtyProduction"]) ? "0" : $_POST["qtyProduction"];
    $qtyOrder = empty($_POST["qtyOrder"]) ? "0" : $_POST["qtyOrder"];

    $query = "UPDATE inventory
              SET productName = \"$productName\",
                  productID = \"$productID\",
                  productDescription = \"$productDescription\",
                  productSize = \"$productSize\",
                  vendor = \"$vendor\",
                  qtyReceived = \"$qtyReceived\",
                  qtyWarehouse = \"$qtyWarehouse\",
                  qtyProduction = \"$qtyProduction\",
                  qtyOrder = \"$qtyOrder\"
              WHERE id = \"$dbID\";";

    $connect->query($query);
    // echo $query;

    if ($connect->error) {
        echo "error";
        $connect->close();
    } 
    else {
        echo "success";
        $connect->close();
    }

?>