<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_website = $_POST['new_website'];
$new_website = htmlspecialchars($new_website, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET website = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_website, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "Website updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>