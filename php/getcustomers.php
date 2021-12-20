<?php

    require_once "connect.php";

    $db = $conn;

    // Fetch data from customers table
    function FetchData(){
        global $db;
        $sql = "SELECT * FROM `lgs-customers` ORDER BY customer_id DESC";
        
        $result = mysqli_query($db, $sql);
        
        if(mysqli_num_rows($result) > 0){
            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $row;  
        } else {
            return $row=[];
        }
    }

    $fetchData = FetchData();
    ShowData($fetchData);

    // Show data to HTML table
    function ShowData($fetchData){
        if(count($fetchData)>0){
            foreach($fetchData as $data){ 
                echo "<tr>
                        <td>".$data['customer_name']."</td>
                        <td>".$data['contact_number']."</td>
                        <td>".$data['customer_address']."</td>
                    </tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='3'>No Data Found</td>
                </tr>"; 
        }
    }
?>