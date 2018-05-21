<?php
    
    
    session_start();
    include('dbopen.php');
    $ID = $_POST['username'];
    $password = $_POST ['password'];
    
    $sql = "SELECT * FROM login where username = ?";
    //$result = $conn->query($sql);
    //$row = mysqli_fetch_assoc($result);
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
        if(password_verify($password, $hashedpass) and !empty($_POST['username']) and !empty($_POST['password']))
        {
            $_SESSION['login'] = $data['password'];
            $_SESSION['username'] = $data['username'];
            //$_SESSION['email'] = $data['email'];
            header("Location: clients.php");
        }
        else 
        {
            header("refresh:5; url=index.html");
            echo "Wrong login ID.  Re-directing to login page....";
        }
    }
    else 
    {
        echo "something went wrong". mysqli_error($conn);
    }
    if(isset($_POST['submit']))

?>