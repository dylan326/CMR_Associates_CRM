<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_cfo_number = $_POST['new_cfo_number'];
$new_cfo_number = htmlspecialchars($new_cfo_number, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET cfo_phone = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_cfo_number, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "CFO phone number updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>