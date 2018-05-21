<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_general_email = $_POST['new_general_email'];
$new_general_email = htmlspecialchars($new_general_email, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET general_email = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_general_email, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "General email updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>