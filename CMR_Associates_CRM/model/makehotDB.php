<?php

include('../dbopen.php');

$sql = "update details set hot_lead = 1 where details_id =".$_GET['details_id'];

if ($conn->query($sql) === TRUE) {
    header('Location: ../clientdetail.php?details_id='.$_GET['details_id']);
} else {
    echo "Error contact Dylan";
}

$conn->close();

?>