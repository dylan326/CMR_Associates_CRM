<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_cfo_email = $_POST['new_cfo_email'];
$new_cfo_email = htmlspecialchars($new_cfo_email, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET cfo_email = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_cfo_email, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "CFO email updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>