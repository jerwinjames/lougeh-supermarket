<?php
    
    // Set form values to blank
    $receipt = $product_name = $quantity = $price = $customer_name = $contact_number = $customer_address = '';
    if(isset($_POST['btnConfirmSales'])){

        // Form value does not refresh
        $receipt = $_POST['receiptNumber'];
        $product_name = $_POST['productName'];
        $quantity = $_POST['productQuantity'];
        $price = $_POST['unitPrice'];
        $customer_name = $_POST['customerName'];
        $contact_number = $_POST['contactNumber'];
        $customer_address = $_POST['customerAddress'];

        // Form submit redirect
        $path = "/lougeh-supermarket";
        header("location: $path/index.php" );

    }

?>

<!DOCTYPE html>
<html lang="en">

<!--Call Header Template-->
<?php include('templates/header.php'); ?>

<!--Main Section of Sales Page-->
<main>
    <section class="container grey-text">
        <div class="center">
            <div class="left"><a href="index.php" class="material-icons">arrow_back</a></div>
            <h3>Sales Transaction</h3>
        </div>
        <form action="" method="POST" class="z-depth-2" id="salesForm">
            <h4 class="custom-text">Order Details</h4>
            <div class="input-field">
                <label for="receiptNumber">Receipt Number</label>
                <input type="text" id="receiptNumber" name="receiptNumber" class="validate"
                    value="<?php echo htmlspecialchars($receipt) ?>" required>
            </div>
            <div class="input-field">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" class="validate"
                    value="<?php echo htmlspecialchars($product_name) ?>" required>
            </div>
            <div class="input-field">
                <label for="productQuantity">Quantity</label>
                <input type="text" id="productQuantity" name="productQuantity" class="validate"
                    value="<?php echo htmlspecialchars($quantity) ?>" required>
            </div>
            <div class="input-field">
                <label for="unitPrice">Unit Price</label>
                <input type="text" id="unitPrice" name="unitPrice" class="validate"
                    value="<?php echo htmlspecialchars($price) ?>" required>
            </div>

            <h4 class="custom-text">Customer Details</h4>
            <div class="input-field">
                <label for="customerName">Customer Name</label>
                <input type="text" id="customerName" name="customerName" class="validate"
                    value="<?php echo htmlspecialchars($customer_name) ?>" required>
            </div>
            <div class="input-field">
                <label for="contactNumber">Contact Number</label>
                <input type="text" id="contactNumber" name="contactNumber" class="validate"
                    value="<?php echo htmlspecialchars($contact_number) ?>" required>
            </div>
            <div class="input-field">
                <label for="customerAddress">Address</label>
                <input type="text" id="customerAddress" name="customerAddress" class="validate"
                    value="<?php echo htmlspecialchars($customer_address) ?>" required>
            </div>

            <div class="center">
                <input type="submit" id="btnConfirmSales" name="btnConfirmSales" value="Confirm Transaction"
                    class="btn-large z-depth-2 hoverable">
            </div>
        </form>
    </section>
</main>
<script src="js/sales.js"></script>

<!--Call Footer Template-->
<?php include('templates/footer.php'); ?>

</html>