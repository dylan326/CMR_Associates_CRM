<?php
    
   include('dbopen.php');
   $ID = 'croche';
    $password = $_POST ['password'];
    
    
    $sql = "SELECT * FROM login where username = ?";
     if($pre = $conn->prepare($sql)) 
    {
        $pre->bind_param('s', $id);//, $pass);
        $id = $ID;
       // $pass = $password;
        $pre->execute();
        $result = $pre->get_result();
        $data = $result->fetch_assoc();
        //hashing passwords
       $hashedpass = $data['password'];
        //if($row= $result->fetch_assoc() and !empty($row['username']) AND !empty($row['password']))
        if(password_verify($password, $hashedpass) and $_POST['username'] == 'croche' and !empty($_POST['password']))
        {
            $_SESSION['login'] = $data['password'];
            $_SESSION['username'] = $data['username'];
            //$_SESSION['email'] = $data['email'];
            header("Location: batchesarea.php");
        }
        else 
        {
            header("refresh:5; url=batches.php");
            echo "Wrong login ID.  Re-directing to login page....";
        }
    }
    else 
    {
        echo "something went wrong contact dylan";
    }
    if(isset($_POST['submit']))
    
  
?>