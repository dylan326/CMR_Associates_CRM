<?php
    
    include('dbopen.php');
    //include('checker.php');
    //gather the data from the form
    $username=$_POST ["username"];
    $password =$_POST ["password"];
    //$email = $_POST ["email"];
    
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    if (empty($password) or empty($username))
    {
        header("refresh:3 url=adduser.php");
        echo "MUST ENTER ALL FIELDS.  Re-directing to create account page, please hold...";
    }
    else 
    {
        $sql = "INSERT INTO login (username, password) VALUES (?, ?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $hashed);
        $stmt->execute();

        if ($stmt) 
        {
            header("refresh:3; url=adduser.php");
            echo "New account created, re-directing to add another user.  Please hold...";
            // echo $sql2;
        }
        else 
        {
            header("refresh:11 url=adduser.php");
            echo "Error:  Username is taken, please pick another username.  Re-directing to add user page, please hold...";
            //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
    }
?>