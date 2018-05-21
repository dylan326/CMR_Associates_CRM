<?php

include('../dbopen.php');
session_start();


$details_id = $_POST['details_id'];
$username = $_SESSION['username'];



 $sql = "update details set followup = '$username' where details_id = $details_id";
    
    $result = $conn->query($sql);
    
    if($result == true)
    {
        header("refresh: 3; url=../clientdetail.php?details_id=".$details_id);
        echo "Client Added to follow up";
    }
    else {  echo "Error updating record: Contact administrator"; }


?>