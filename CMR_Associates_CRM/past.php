<html>
    <head><title>Notes</title></head>
    <body>
    <a href="clientdetail.php?details_id=<?php echo $_POST['id']; ?>">Back to Client Info</a>
    <p></p>
    <a href="index.html">Log Out</a>

<hr><br />

<?php
  include('dbopen.php');
    
    $id = $_POST['id'];

if(isset($_POST['id']))
{
$sql = "SELECT logcall.logcall_id, details.name, logcall.time_called, logcall.date_called, logcall.what_happened from logcall inner join details on details.details_id = logcall.details_id where details.details_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Log ID: " . $row["logcall_id"]. " - <b>Client Name:</b> " . $row["name"]. " <b>Time Called:</b> " . $row["time_called"]." <b>Date Called:</b> ".$row["date_called"]." <b>What Happened:</b> ".$row["what_happened"]. "<br>";
    }
} else {
    echo "0 results";
}

}

$conn->close();
?>