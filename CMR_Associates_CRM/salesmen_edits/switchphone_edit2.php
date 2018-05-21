<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_sb_phone = $_POST['new_sb_phone'];
$new_name = htmlspecialchars($new_sb_phone, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET sb_phone = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_sb_phone, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "Switch boardphone number updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>