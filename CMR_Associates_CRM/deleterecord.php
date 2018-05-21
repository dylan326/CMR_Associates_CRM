 <?php
include('dbopen.php');
$delete_id = $_GET['details_id'];
// sql to delete a record
$sql = "DELETE FROM details WHERE details_id= $delete_id";

if ($conn->query($sql) === TRUE) {
    
    header("refresh:3; url=clients.php");
    echo "Client deleted successfully.  Re-directing to leads page...";
} else {
    echo "Error deleting record: Contact Dylan" . $conn->error;
}

$conn->close();
?> 