<?php

include('../dbopen.php');
session_start();


$details_id = $_POST['details_id'];




 $sql = "update details set followup = NULL where details_id = $details_id";
    
    $result = $conn->query($sql);
    
    if($result == true)
    {
        header("refresh: 3; url=../clientdetail.php?details_id=".$details_id);
        echo "Client Removed from follow up";
    }
    else {  echo "Error updating record: contact Administrator"; }


?>