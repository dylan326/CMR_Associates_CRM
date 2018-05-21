<?php
session_start();
include('checker.php');

?>
<html>
    <head> 
        <title>Add new user</title> 
   
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
     
      <li><a href="datainput.php">Data Input: Haejin</a></li>
      <li><a href="reminders.php">Reminders</a></li>
      <li><a href="showFollowup.php">Follow up</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.html" style = "color: #00FFFF;"><span class="glyphicon glyphicon-log-in" style ="color: #00FFFF;"></span> Logout</a></li>
      <li><a href="admin.html">Admin: Dylan</a></li>
    </ul>
  </div>
</nav>
  
    <br /><br />
    <center> 
        
    </center>
    <br /><br /><br />
    <center>
        <fieldset style="width:30%">
            <form action="add_newuser.php" method="post">Add user<br><br />
                Pick Username:<br> 
                <input type="text" name="username"><br>
                Pick Password:<br>
                <input type="password" name="password"><br>
              
                <input type="submit" name="submit" value="Add user">
            </form>
        </fieldset>
    </center>
    </body>
</html>