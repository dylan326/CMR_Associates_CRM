<?php
session_start();
include('checker.php');
include('dbopen.php');
$reminder_id = $_POST['reminder_id'];
$reminder_id = htmlspecialchars($reminder_id, ENT_QUOTES, 'UTF-8');

$stmt = $conn->prepare("DELETE FROM reminders WHERE reminder_id=?");
$stmt->bind_param("i",$reminder_id);
$stmt->execute();

if ($stmt) {
    header("Location: reminders.php");
} else {
    echo "Error deleting record: contact Dylan" ;
}

$conn->close();
?>