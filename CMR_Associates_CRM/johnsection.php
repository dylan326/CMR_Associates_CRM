<?php

session_start();
include('checker.php');

?>
<html>
    <head><title>Leads</title>
    
   
 
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
  

   
    <ul>
 <?php
        
      include('dbopen.php');
        
        echo "<h1><u>Click on lead to see info</u></h1>";
       
        $sql = "SELECT * FROM details where salesmen like '%John Obrien%' order by name asc";
        //$result = mysqli_query($conn, $sql);
        if ($pre = $conn->prepare($sql))
        {
            $pre->execute();
            $result= $pre->get_result();
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                
                if ($row['hot_lead'] != 1)
                {
                echo ('<li><a href="clientdetail.php?details_id=' . $row['details_id'] .'" >'.$row['name'] .' </a></li>');
                }
                else {
                  echo ('<li><a style="color: #7FFF00;" href="clientdetail.php?details_id=' . $row['details_id'] .'" >'.$row['name'] .' </a></li>');
                }
            }
        } 
        else 
        {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
    </ul>
    
    
    </body>
</html>