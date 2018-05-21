<?php
session_start();
include('checker.php');

?>
<html>
    <head>
        <title>Batch Finder</title>
        <script src="./scripts/logout.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="clients.php" >Leads</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="batches.php">Batches: Chris</a></li>
     
      <li><a href="datainputarea.php">Input leads</a></li>
      <li><a href="txclients.php">Texas Clients</a></li>
      <li><a href="johnsection.php">John O'Brien</a></li>
      <li><a href="reminders.php">Reminders</a></li>
      <li><a href="showFollowup.php">Follow up</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.html" style = "color: #00FFFF;"><span class="glyphicon glyphicon-log-in" style ="color: #00FFFF;"></span> Logout</a></li>
      <li><a href="admin.html">Admin: Dylan</a></li>
    </ul>
  </div>
</nav>
    <h1> Batch Area</h1>
    <hr>
<form action="weekrecords.php">
  Click here to see a weeks worth of records:<br />
  <input type="submit" value="Get weekly records">
</form>

<hr>
<form action="monthrecords.php">
  Click here to see a month worth of records:<br />
  <input type="submit" value="Get monthly records">
</form>
<hr>
 
<form action="" method="post">
    Looking for a certian number of records? How many(list ordered from most recent call on)?
    <input type="number" name="howmany">
    <input type="submit" value = "submit">
</form>
<?php
  include('dbopen.php');
    
    $value = $_POST['howmany'];

if(isset($_POST['howmany']))
{
$sql = "SELECT logcall.logcall_id, details.name, logcall.time_called, logcall.date_called, logcall.what_happened from logcall inner join details on details.details_id = logcall.details_id ORDER BY logcall_id DESC LIMIT $value";
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


?>
<h2>Today's calls</h2>
<?php
  include('dbopen.php');
    
    //$value = $_POST['howmany'];

$sql = "SELECT logcall.logcall_id, details.name, logcall.time_called, logcall.date_called, logcall.what_happened from logcall inner join details on details.details_id = logcall.details_id WHERE DATE(`createDate`) = CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Log ID: " . $row["logcall_id"]. " - <b>Client Name:</b> " . $row["name"]. " <b>Time Called:</b> " . $row["time_called"]." <b>Date Called:</b> ".$row["date_called"]." <b>What Happened:</b> ".$row["what_happened"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>





   </body>
</html>