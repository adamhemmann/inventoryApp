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
    <title>Edit Inventory Data</title>
</head>

<body>
    <div class="container" id="productSelectFormContainer">
        <div class="row justify-content-center mt-5">
            <div class="col-5 text-center">
                <h1>Edit Inventory Data</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 mt-3 text-center">
                <form id="productSelectForm">
                    <!-- <input type="hidden" name="action" value="do_remove"> -->
                    <select class="form-select" id="productSelect" name="productSelect">
                        <option value="none" selected disabled> -- Select a product to edit -- </option>
                        <?php

                        require "php_action/doDBConnect.php";

                        $query = "SELECT productName FROM inventory";

                        $connectResult = $connect->query($query);
                        while ($row = $connectResult->fetch_assoc()) {
                            $prodName = $row["productName"];
                            echo "<option value=$prodName>" . $prodName . "</option>";
                        }

                        $connectResult->close();
                        $connect->close();

                        ?>
                    </select>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mt-3 text-center" id="editProductInfo">
                <form id="editInventoryForm"></form>
            </div>
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
                    <strong>Error! </strong>An error ocurred. Please try again.
                </div>
            </div>
        </div>
    </div>
</body>

</html>