<?php

    require_once "connect.php";
 
    $db = $conn;

    $receipt_number = mysqli_real_escape_string($conn, $_POST['receiptNumber']);
    $product_name = mysqli_real_escape_string($conn, $_POST['productName']);
    $product_quantity = mysqli_real_escape_string($conn, $_POST['productQuantity']);
    $unit_price = mysqli_real_escape_string($conn, $_POST['unitPrice']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customerName']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $customer_address = mysqli_real_escape_string($conn, $_POST['customerAddress']);
 
    if (!empty($receipt_number) && !empty($product_name) && !empty($product_quantity) && !empty($unit_price) && !empty($customer_name) && !empty($contact_number) && !empty($customer_address)) {
        InsertSalesData($receipt_number, $product_name, $product_quantity, $unit_price, $customer_name);
        InsertCustomerData($customer_name, $contact_number, $customer_address);
    } else {
        echo 'All fields are required';
    }

    // Insert to sales table
    function InsertSalesData($rnumber, $pname, $pquantity, $uprice, $cname){

        global $db;

        $sql = "INSERT INTO `lgs-sales`(receipt_number, product_name, product_quantity, unit_price, customer_name) VALUES ('$rnumber', '$pname', '$pquantity', '$uprice', '$cname')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    // Insert to customers table
    function InsertCustomerData($cname, $cnumber, $caddress){

        global $db;

        $sql = "INSERT INTO `lgs-customers`(customer_name, contact_number, customer_address) VALUES ('$cname', '$cnumber', '$caddress')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    mysqli_close($conn);
?>