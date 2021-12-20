<?php

    $conn = mysqli_connect('localhost', 'root', '', 'lg-supermarket');

    if(!$conn){
        die('Connection error: ' . mysqli_connect_error());
    }
    
?>