<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_annual_sales = $_POST['new_annual_sales'];
$new_annual_sales = htmlspecialchars($new_annual_sales, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET annula_sales = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_annual_sales, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "Annual sales updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>