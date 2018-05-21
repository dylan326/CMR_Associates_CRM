<?php
session_start();
include('checker.php')
?>
<html>
    <head><title>Batches Login</title>
    
   
 
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
    
    <center><h1>Hi Chris.  Login to get your batches</h1><br>
    <center><img src ="./images/cmr.png" ></center>
        <h4></h4>
    </center>
    <br /><br />
    <center> 
        <fieldset style="width:35%; border-radius: 5px;">
            <form method="POST" action="chrisConnectivity.php"><br><br /> Username <br>
                <input type="text" name="username" size="30"><br>
                Password <br><input type="password" name="password" size="30"><br><br />
                <input id="button" type="submit" name="submit" value="Login">
            </form>
            <br />
           
        </fieldset> 
    </center>
    
   
    
    </body>
</html>