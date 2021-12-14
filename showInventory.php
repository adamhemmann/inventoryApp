<?php

    require_once "header.php";

    if (!$loggedIn) {
		header("Location: index.php");
		exit;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>View Inventory Data</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-5 text-center">
                <h1>View Inventory Data</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 text-center">
                <div class="alert alert-primary" id="itemCountAlert">
                    <span>Total products being tracked: <?php
                                                            require "php_action/doDBConnect.php";

                                                            $sql = "SELECT * FROM inventory;";
                                                            $query = $connect->query($sql);
                                                            $countProducts = $query->num_rows;
                                                        
                                                            $query->close();
                                                            $connect->close();

                                                            echo "<strong>$countProducts</strong>"; 
                                                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <table class="table table-hover" id="invTable">
                <thead class="table-dark">
                    <tr>
                        <th>Product Name</th>
                        <th>Product ID</th>
                        <th>Product Description</th>
                        <th>Product Size</th>
                        <th>Vendor</th>
                        <th>Quantity Received</th>
                        <th>Quantity In Warehouse</th>
                        <th>Quantity In Production</th>
                        <th>Quantity On Order</th>
                    </tr>
                </thead>
                <tbody id="invTableBody">
                <?php
                    require "php_action/doDBConnect.php";

                    $query = "SELECT * FROM inventory";
                    $connectResult = $connect->query($query);

                    while ($row = $connectResult->fetch_assoc()) {
                        echo "<tr id=" . $row["id"] . ">";
                        echo "<td>" . $row["productName"] . "</td>";
                        echo "<td>" . $row["productID"] . "</td>";
                        echo "<td>" . $row["productDescription"] . "</td>";
                        echo "<td>" . $row["productSize"] . "</td>";
                        echo "<td>" . $row["vendor"] . "</td>";
                        // When calling number_format(), null db values are displayed as 0 by default
                        // Ternary operator is used to ensure null values display as an empty string/cell instead
                        echo "<td>" . number_format(empty($row["qtyReceived"]) ? "" : $row["qtyReceived"]) . "</td>";
                        echo "<td>" . number_format(empty($row["qtyWarehouse"]) ? "" : $row["qtyWarehouse"]). "</td>";
                        echo "<td>" . number_format(empty($row["qtyProduction"]) ? "" : $row["qtyProduction"]). "</td>";
                        echo "<td>" . number_format(empty($row["qtyOrder"]) ? "" : $row["qtyOrder"]). "</td>";
                        echo "</tr>";
                    }

                    $connectResult->close();
                    $connect->close();
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>