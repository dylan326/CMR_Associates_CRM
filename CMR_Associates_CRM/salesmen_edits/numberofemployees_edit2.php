<?php

include('../dbopen.php');
$details_id = $_POST['details_id'];
$new_number_of_employees = $_POST['new_number_of_employees'];
$new_number_of_employees = htmlspecialchars($new_number_of_employees, ENT_QUOTES, 'UTF-8');
$query = "UPDATE details
        SET number_of_employees = ?
        WHERE details_id = ?";

if($stmt = $conn->prepare($query)) 
{
$stmt->bind_param('si', $new_number_of_employees, $details_id);
    if ($stmt->execute()) 
    {    
        header("refresh:3; url=../clientdetail.php?details_id=$details_id");
        echo "Number of employees updated. Redirecting to lead details...";
    } 
    else 
    {
        echo "did not work,  contact Dylan";
    }
}

?>