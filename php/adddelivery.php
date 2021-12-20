<?php

    require_once "connect.php";
 
    $db = $conn;

    $receipt_number = mysqli_real_escape_string($conn, $_POST['receiptNumber']);
    $product_barcode = mysqli_real_escape_string($conn, $_POST['productBarcode']);
    $product_name = mysqli_real_escape_string($conn, $_POST['productName']);
    $product_description = mysqli_real_escape_string($conn, $_POST['productDescription']);
    $product_quantity = mysqli_real_escape_string($conn, $_POST['productQuantity']);
    $cost_per_item = mysqli_real_escape_string($conn, $_POST['costPerItem']);
    $supplier_code = mysqli_real_escape_string($conn, $_POST['supplierCode']);
    $company_name = mysqli_real_escape_string($conn, $_POST['companyName']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $company_address = mysqli_real_escape_string($conn, $_POST['companyAddress']);
 
    if (!empty($receipt_number) && !empty($product_barcode) && !empty($product_name) && !empty($product_description) && !empty($product_quantity) && !empty($cost_per_item) && !empty($supplier_code) && !empty($company_name) && !empty($contact_number) && !empty($company_address)) {
        InsertDeliveryData($receipt_number, $product_barcode, $product_name, $product_description, $product_quantity, $cost_per_item, $supplier_code, $company_name);
        InsertSupplierData($supplier_code, $company_name, $contact_number, $company_address);
    } else {
        echo 'All fields are required';
    }

    // Insert to deliveries table
    function InsertDeliveryData($rnumber, $pbarcode, $pname, $pdesc, $pquantity, $cpitem, $scode, $sname){

        global $db;

        $sql = "INSERT INTO `lgs-deliveries`(receipt_number, product_barcode, product_name, product_description, product_quantity, cost_per_item, supplier_code, supplier_name) VALUES ('$rnumber', '$pbarcode', '$pname', '$pdesc', '$pquantity', '$cpitem', '$scode', '$sname')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    // Insert to suppliers table
    function InsertSupplierData($scode, $cname, $cnumber, $caddress){

        global $db;

        $sql = "INSERT INTO `lgs-suppliers`(supplier_code, company_name, contact_number, company_address) VALUES ('$scode', '$cname', '$cnumber', '$caddress')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    mysqli_close($conn);
?>