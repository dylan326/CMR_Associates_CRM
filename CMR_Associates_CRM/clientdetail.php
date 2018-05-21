 <?php

session_start();
include('checker.php');

?>
<html>
    <head><title>Client Info</title>
    
   
 
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
        
   <?php include('model/clientdetail_dbcall.php'); ?>
    </ul>
    <input type="button" style="background-color: red" value="Delete Client" onclick="confirmit()">
        <p></p>
    <form action="past.php" method = "post">
        <input type="hidden" name="id" value="<?= $_GET['details_id']; ?>" >
        <input type="submit" value="See notes from past calls">
    </form>
    <?php
    $details_id = $_GET['details_id'];
    $sql = "Select followup from details where details_id = $details_id";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $followupName = $row['followup'];
            
        }
    }
    
    if ($followupName == NULL)
    {
        echo "<form action='model/followup_dbcall.php' method = 'post'>
        <input type='hidden' name='details_id' value= $details_id >
        <input type='submit' value='Add to follow up calls'>
    </form> ";
    }
    else {
        echo "Follow set by: ".$followupName;
        if ($_SESSION['username'] == $followupName)
        {
            echo "<form action='model/remove_followup_dbcall.php' method = 'post'>
        <input type='hidden' name='details_id' value= $details_id >
        <input type='submit' value='Remove from Follow up'>
    </form> ";
            
        }
    }
    
    ?>
    <h2>Log this call</h2>
    <form action="logcall.php" method="post">
        Time of call: 
        <input type="text" name="time" placeholder="HH:MM(am/pm)" ><br />
        Date of Call: 
        <input type="text" name="date" placeholder="MM/DD/YYYY"><br />
        <p></p>
         <p>Describe how the call went:</p>
        <textarea name="what_happened" rows="4" cols="50"></textarea><br />
        <input type="hidden" name="identifier" value="<?= $_GET['details_id']; ?>" >
        <input type="submit" value= "Log">
    </form>
    <script type="text/javascript">
                function confirmit()
{
  var results = confirm("Are you sure you want to delete?");
  
  if(results == true){
    window.location="deleterecord.php?details_id=<?php echo $details_id; ?>";
  }
  else {
      window.location="clientdetail.php?details_id=<?php echo $details_id; ?>";
  }
    
}

function changeDBhot(){
      
        window.location.replace ( "model/makehotDB.php?details_id=" + "<?php echo $_GET['details_id']; ?>") ;
      }
      
      function changeDBcold()
      {
    
         window.location.replace ( "model/makecoldDB.php?details_id=" + "<?php echo $_GET['details_id']; ?>") ;
        
      
      }
    </script>
    
    </body>
</html>