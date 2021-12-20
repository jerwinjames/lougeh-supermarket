<!DOCTYPE html>
<html lang="en">

<!--Call Header Template-->
<?php include('templates/header.php'); ?>

<!--Main Section of Home Page-->
<main class="center">
    <h1 class="grey-text">Transaction Records</h1>
    <div class="container">
        <a href="deliveries.php" class="waves-effect waves-light btn-large hoverable">Add Delivery Transaction</a>
        <a href="sales.php" class="waves-effect waves-light btn-large hoverable">Add Sales Transaction</a>
    </div>
    <section>
        <div class="container">
            <h4 class="left-align custom-text">Items</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Receipt Number</th>
                        <th>Barcode</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Cost Per Item</th>
                        <th>Supplier Code</th>
                        <th>Supplier Name</th>
                    </thead>
                    <tbody id="items">

                    </tbody>

                </table>
            </div>

            <h4 class="left-align custom-text">Suppliers</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Code</th>
                        <th>Company Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                    </thead>
                    <tbody id="suppliers">

                    </tbody>
                </table>
            </div>

            <h4 class="left-align custom-text">Orders</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Receipt Number</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Customer Name</th>
                    </thead>
                    <tbody id="orders">

                    </tbody>
                </table>
            </div>

            <h4 class="left-align custom-text">Customers</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Customer Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                    </thead>
                    <tbody id="customers">

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<!--Call Footer Template-->
<?php include('templates/footer.php'); ?>

</html>