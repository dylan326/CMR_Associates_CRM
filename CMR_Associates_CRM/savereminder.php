<?php
session_start();
include('checker.php');
include('dbopen.php');

$reminder = $_POST['reminder'];
$reminder = htmlspecialchars($reminder, ENT_QUOTES, 'UTF-8');

$stmt = $conn->prepare("INSERT INTO reminders (reminder)VALUES (?)");
 $stmt->bind_param("s",$reminder);
 
 $stmt->execute();

 if ($stmt) {
    header("Location: reminders.php");
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>