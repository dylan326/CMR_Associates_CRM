<?php
    //hide connection credentials in config file
     $config = parse_ini_file('/home/u806686084/config.ini');
       $conn = mysqli_connect('mysql.hostinger.com',$config['username'],$config['password'],$config['dbname']);
    if ($conn == false)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>