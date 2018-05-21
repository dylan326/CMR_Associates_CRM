<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_specialnotes = $_POST['new_specialnotes'];
$new_specialnotes= htmlspecialchars($new_specialnotes, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET special_notes = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_specialnotes, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "Special notes updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>