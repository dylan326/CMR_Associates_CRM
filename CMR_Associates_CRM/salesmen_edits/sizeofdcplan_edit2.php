<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_size_of_dc_plan = $_POST['new_size_of_dc_plan'];
$new_size_of_dc_plan = htmlspecialchars($new_size_of_dc_plan, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET size_dc_plan = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_size_of_dc_plan, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "DC plan size updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>