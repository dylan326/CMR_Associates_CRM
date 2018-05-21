<?php
session_start();
include('checker.php');
?>
<html>
    <head>
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
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.html" style = "color: #00FFFF;"><span class="glyphicon glyphicon-log-in" style ="color: #00FFFF;"></span> Logout</a></li>
      <li><a href="admin.html">Admin: Dylan</a></li>
    </ul>
  </div>
</nav>
            
       <form action="actualdelete.php" method="post">
           <input type="number" name="reminder_id">
           <input type="submit" value="Enter reminder id to delete">
       </form>
<?php
include('dbopen.php');

$sql = "SELECT * from reminders";

if ($pre = $conn->prepare($sql)){
     $pre->execute();
            $result= $pre->get_result();
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                
               echo "Reminder id: " . $row["reminder_id"]. " - Reminder: <b>" . $row["reminder"].  "</b><br>";
            }
        } 
        else 
        {
            echo "0 results";
}


$conn->close();


?>

 </body>
    
</html>