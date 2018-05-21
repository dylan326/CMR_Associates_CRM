<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_cfo_assistant = $_POST['new_cfo_assistant'];
$new_cfo_assistant = htmlspecialchars($new_cfo_assistant, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET cfo_assistant = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_cfo_assistant, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "CFO assistant updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>