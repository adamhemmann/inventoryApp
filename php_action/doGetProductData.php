<?php

    require "doDBConnect.php";

    $p = $_GET["productSelect"];
    $query = "SELECT * FROM inventory WHERE productName = \"$p\";";

    // echo $p;
    // echo var_dump($_GET);

    $connectResult = $connect->query($query);

    while ($row = $connectResult->fetch_assoc()) {
        echo    "<input type=\"hidden\" name=\"action\" value=\"do_update_inventory\">" .
                "<input type =\"hidden\" name=\"dbID\" value=\"" . $row["id"] . "\">" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"productName\" name=\"productName\" class=\"form-control\" placeholder=\"Product name\" readonly=\"readonly\" value=\"" . $row["productName"] . "\">" .
                    "<label for=\"productName\">Name</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"productID\" name=\"productID\" class=\"form-control\" placeholder=\"Product ID\" readonly=\"readonly\" value=\"" . $row["productID"] . "\">" .
                    "<label for=\"productID\">ID</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"productDescription\" name=\"productDescription\" class=\"form-control\" placeholder=\"Product Description\" readonly=\"readonly\" value=\"" . $row["productDescription"] . "\">" .
                    "<label for=\"productDescription\">Product Description</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"productSize\" name=\"productSize\" class=\"form-control\" placeholder=\"Product size\" readonly=\"readonly\" value=\"" . $row["productSize"] . "\">" .
                    "<label for=\"productSize\">Size</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"vendor\" name=\"vendor\" class=\"form-control\" placeholder=\"Vendor\" readonly=\"readonly\" value=\"" . $row["vendor"] . "\">" .
                    "<label for=\"vendor\">Vendor</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"qtyReceived\" name=\"qtyReceived\" class=\"form-control\" placeholder=\"Quantity received\" value=\"" . $row["qtyReceived"] . "\">" .
                    "<label for=\"qtyReceived\">Quantity received</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"qtyWarehouse\" name=\"qtyWarehouse\" class=\"form-control\" placeholder=\"Quantity in warehouse\" value=\"" . $row["qtyWarehouse"] . "\">" .
                    "<label for=\"qtyWarehouse\">Quantity in warehouse</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"qtyProduction\" name=\"qtyProduction\" class=\"form-control\" placeholder=\"Quantity in production\" value=\"" . $row["qtyProduction"] . "\">" .
                    "<label for=\"qtyProduction\">Quantity in production</label></div>" .
                "<div class=\"form-floating mb-3 mt-3\">" .
                    "<input type=\"text\" id=\"qtyOrder\" name=\"qtyOrder\" class=\"form-control\" placeholder=\"Quantity on order\" value=\"" . $row["qtyOrder"] . "\">" .
                    "<label for=\"qtyOrder\">Quantity on order</label></div>" .
                "<button type=\"submit\" class=\"btn btn-warning mt-1\" name=\"editInventorySubmit\" id=\"editInventorySubmit\">Update</button>"; 
    }
    
    $connectResult->close();
    $connect->close();

?>