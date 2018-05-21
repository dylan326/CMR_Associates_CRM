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
      <li><a href="showFollowup.php">Follow up</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.html" style = "color: #00FFFF;"><span class="glyphicon glyphicon-log-in" style ="color: #00FFFF;"></span> Logout</a></li>
      <li><a href="admin.html">Admin: Dylan</a></li>
    </ul>
  </div>
</nav>
  

<h2>Add a reminder</h2>

<form action="savereminder.php" method="post">
            <input type="text" name="reminder" style="width: 300px;">
            <input type="submit" value="save reminder">
        </form>

<p id="putData"></p>

<script type="text/javascript">
    var obj, dbParam, xmlhttp, myObj, x, txt = "";
obj = { "table":"reminders"};
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        for (x in myObj) {
            txt += "Reminder: " + "<b>" + myObj[x].reminder + "</b>" + " - Date/Time reminder set: " + myObj[x].date + "<br>";
        }
        document.getElementById("putData").innerHTML = txt;
    }
};
xmlhttp.open("GET", "json_dbcall.php?x=" + dbParam, true);
xmlhttp.send();
</script>

<a href="deletereminder.php" style="color: white; border-style: solid; border-color: black; background-color: red;">Delete a reminder</a>



</body>
</html>