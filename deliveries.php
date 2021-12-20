<?php
    
    // Set form values to blank
    $receipt = $barcode = $product_name = $description = $quantity = $cost = $supplier_code = $company_name = $contact_number = $company_address = '';
    if(isset($_POST['btnConfirmDelivery'])){

        // Form value does not refresh
        $receipt = $_POST['receiptNumber'];
        $barcode = $_POST['productBarcode'];
        $product_name = $_POST['productName'];
        $description = $_POST['productDescription'];
        $quantity = $_POST['productQuantity'];
        $cost = $_POST['costPerItem'];
        $supplier_code = $_POST['supplierCode'];
        $company_name = $_POST['companyName'];
        $contact_number = $_POST['contactNumber'];
        $company_address = $_POST['companyAddress'];

        // Form submit redirect
        $path = "/lougeh-supermarket";
        header("location: $path/index.php" );
    }

?>

<!DOCTYPE html>
<html lang="en">

<!--Call Header Template-->
<?php include('templates/header.php'); ?>

<!--Main Section of Deliveries Page-->
<main>
    <section class="container grey-text">
        <div class="center">
            <div class="left"><a href="index.php" class="material-icons">arrow_back</a></div>
            <h3>Delivery Transaction</h3>
        </div>
        <form action="" method="POST" class="z-depth-2" id="deliveryForm">
            <h4 class="custom-text">Item Details</h4>
            <div class="input-field">
                <label for="receiptNumber">Receipt Number</label>
                <input type="text" id="receiptNumber" name="receiptNumber" class="validate"
                    value="<?php echo htmlspecialchars($receipt) ?>" required>
            </div>
            <div class="input-field">
                <label for="productBarcode">Barcode</label>
                <input type="text" id="productBarcode" name="productBarcode" class="validate"
                    value="<?php echo htmlspecialchars($barcode) ?>" required>
            </div>
            <div class="input-field">
                <label for="productName">Item Name</label>
                <input type="text" id="productName" name="productName" class="validate"
                    value="<?php echo htmlspecialchars($product_name) ?>" required>
            </div>
            <div class="input-field">
                <label for="productDescription">Description</label>
                <textarea id="productDescription" name="productDescription" class="materialize-textarea"
                    value="<?php echo htmlspecialchars($description) ?>" required></textarea>
            </div>
            <div class="input-field">
                <label for="productQuantity">Quantity</label>
                <input type="text" id="productQuantity" name="productQuantity" class="validate"
                    value="<?php echo htmlspecialchars($quantity) ?>" required>
            </div>
            <div class="input-field">
                <label for="costPerItem">Cost per Item</label>
                <input type="text" id="costPerItem" name="costPerItem" class="validate"
                    value="<?php echo htmlspecialchars($cost) ?>" required>
            </div>

            <h4 class="custom-text">Supplier Details</h4>
            <div class="input-field">
                <label for="supplierCode">Supplier Code</label>
                <input type="text" id="supplierCode" name="supplierCode" class="validate"
                    value="<?php echo htmlspecialchars($supplier_code) ?>" required>
            </div>
            <div class="input-field">
                <label for="companyName">Company Name</label>
                <input type="text" id="companyName" name="companyName" class="validate"
                    value="<?php echo htmlspecialchars($company_name) ?>" required>
            </div>
            <div class="input-field">
                <label for="contactNumber">Contact Number</label>
                <input type="text" id="contactNumber" name="contactNumber" class="validate"
                    value="<?php echo htmlspecialchars($contact_number) ?>" required>
            </div>
            <div class="input-field">
                <label for="companyAddress">Address</label>
                <input type="text" id="companyAddress" name="companyAddress" class="validate"
                    value="<?php echo htmlspecialchars($company_address) ?>" required>
            </div>

            <div class="center">
                <input type="submit" name="btnConfirmDelivery" value="Confirm Transaction"
                    class="btn-large z-depth-2 hoverable">
            </div>
        </form>
    </section>
</main>
<script src="js/delivery.js"></script>

<!--Call Footer Template-->
<?php include('templates/footer.php'); ?>

</html>