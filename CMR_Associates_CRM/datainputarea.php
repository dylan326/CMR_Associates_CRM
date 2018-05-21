<?php
session_start();
include('checker.php')
?>
<html>
    <head><title>Add Leads</title>
    
   
 
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
  
  <form action="savedata.php" method="post">
      Name:
      <input type="text" name="name"><br />
      Address:
      <input type="text" name="address" size="70"><br />
      Switchborad Phone:
      <input type="text" name="sb_phone"><br />
      General Email:
      <input type="text" name="general_email"><br />
      CFO Name:
      <input type="text" name="cfo_name"><br />
      CFO Phone Number: 
      <input type="text" name="cfo_phone"><br />
      CFO Email: 
      <input type="text" name="cfo_email"><br />
      Linkedin: 
      <input type="text" name="linkedin"><br />
      CFO Assistant: 
      <input type="text" name="cfo_assistant"><br />
      Annual Sales: 
      <input type="text" name="annual_sales"><br />
      # of employees:
      <input type ="text" name="number_of_employees"><br />
      Is this the Headquarters? 
      <input type="text" name="is_headquarters"><br />
      Website:
      <input type="text" name="website"><br />
      Size of DC Plan:
      <input type="text" name="size_dc_plan"><br />
      Recent News Release Articles:
      <input type="text" name="news_articles"><br />
      Special Notes: 
      <input type="text" name="special_notes" size="60"><br />
      State: 
      <input type="text" name = "state" placeholder="Like: CA or TX"><br>
      Salesman: 
      <input type="text" name = "salesmen" placeholder="First and last name"><br>
      
      <input type="submit" value="Save lead">
      
  </form>

    
    
    
    
    </body>
</html>