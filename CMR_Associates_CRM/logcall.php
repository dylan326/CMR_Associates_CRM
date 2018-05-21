<?php
  session_start();
  include('checker.php');
     include('dbopen.php');
    
    $time = $_POST['time'];
    $time = htmlspecialchars($time, ENT_QUOTES, 'UTF-8');
    
    $what_happened = $_POST['what_happened'];
    $what_happened = htmlspecialchars($what_happened, ENT_QUOTES, 'UTF-8');
    
    $date = $_POST['date'];
    $date = htmlspecialchars($date, ENT_QUOTES, 'UTF-8');
    
    $identifier = $_POST['identifier'];
    $identifier = htmlspecialchars($identifier, ENT_QUOTES, 'UTF-8');
    
    
       /*$sql = "select * from details where details_id >".$identifier." limit 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nextclient = $row["details_id"];
    }
} else {
    $nextclient = 14;
}*/
    
   

 $stmt = $conn->prepare("insert into logcall (details_id, date_called, time_called, what_happened) values (?, ?, ?, ?)");
    $stmt->bind_param("isss", $identifier, $date, $time, $what_happened);
    // set parameters and execute
    $stmt->execute();
    
    if ($stmt)
    {   //header("refresh:3; url=clientdetail.php?details_id=".$nextclient);
        header("refresh:3; url=clients.php");
            echo "Call record logged, re-directing.  Please hold...";
            // echo $sql2;
        
    }
    else 
    {
        echo "Error: Contact Dylan";
    }
    $stmt->close();
    $conn->close();
?>