<?php

 
include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_linkedin = $_POST['new_linkedin'];
$new_linkedin = htmlspecialchars($new_linkedin, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET linkedin = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_linkedin, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "linkdin updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>