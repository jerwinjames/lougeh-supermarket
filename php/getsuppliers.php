<?php

    require_once "connect.php";

    $db = $conn;

    // Fetch data from suppliers table
    function FetchData(){
        global $db;
        $sql = "SELECT * FROM `lgs-suppliers` ORDER BY supplier_id DESC";
        
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
                        <td>".$data['supplier_code']."</td>
                        <td>".$data['company_name']."</td>
                        <td>".$data['contact_number']."</td>
                        <td>".$data['company_address']."</td>
                    </tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='4'>No Data Found</td>
                </tr>"; 
        }
    }
?>