<?php
session_start();
include('checker.php');
  include('dbopen.php');
    
    $name = $_POST['name'];
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    
    $address = $_POST['address'];
    $address = htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
    
    $sb_phone = $_POST['sb_phone'];
    $sb_phone = htmlspecialchars($sb_phone, ENT_QUOTES, 'UTF-8');
    
    $general_email = $_POST['general_email'];
    $general_email = htmlspecialchars($general_email, ENT_QUOTES, 'UTF-8');
    
    $cfo_name = $_POST['cfo_name'];
    $cfo_name = htmlspecialchars($cfo_name, ENT_QUOTES, 'UTF-8');
    
    $cfo_phone = $_POST['cfo_phone'];
    $cfo_phone = htmlspecialchars($cfo_phone, ENT_QUOTES, 'UTF-8');
    
    $cfo_email = $_POST['cfo_email'];
    $cfo_email = htmlspecialchars($cfo_email, ENT_QUOTES, 'UTF-8');
    
    $annual_sales = $_POST['annual_sales'];
    $annual_sales = htmlspecialchars($annual_sales, ENT_QUOTES, 'UTF-8');
    
    $number_of_employees = $_POST['number_of_employees'];
    $number_of_employees = htmlspecialchars($number_of_employees, ENT_QUOTES, 'UTF-8');
    
    $is_headquarters = $_POST['is_headquarters'];
    $is_headquarters = htmlspecialchars($is_headquarters, ENT_QUOTES, 'UTF-8');
    
    $website = $_POST['website'];
    $website = htmlspecialchars($website, ENT_QUOTES, 'UTF-8');
    
    $size_dc_plan = $_POST['size_dc_plan'];
    $size_dc_plan = htmlspecialchars($size_dc_plan, ENT_QUOTES, 'UTF-8');
    
    $news_articles = $_POST['news_articles'];
    $news_articles = htmlspecialchars($news_articles, ENT_QUOTES, 'UTF-8');
    
    $special_notes = $_POST['special_notes'];
    $special_notes = htmlspecialchars($special_notes, ENT_QUOTES, 'UTF-8');
    
    $cfo_assistant = $_POST['cfo_assistant'];
    $cfo_assistant = htmlspecialchars($cfo_assistant, ENT_QUOTES, 'UTF-8');
    
    $new_linkedin = $_POST['linkedin'];
    $new_linkedin = htmlspecialchars($new_linkedin, ENT_QUOTES, 'UTF-8');

$state = $_POST['state'];
    $state = htmlspecialchars($state, ENT_QUOTES, 'UTF-8');
    
    $salesmen = $_POST['salesmen'];
    $salesmen = htmlspecialchars($salesmen, ENT_QUOTES, 'UTF-8');

 $stmt = $conn->prepare("insert into details (name, address, sb_phone, general_email, cfo_name, cfo_phone, cfo_email, annula_sales, number_of_employees, is_headquarter, website, size_dc_plan, recent_news, special_notes, cfo_assistant, linkedin, state, salesmen) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssssss", $name, $address, $sb_phone, $general_email, $cfo_name, $cfo_phone, $cfo_email, $annual_sales, $number_of_employees, $is_headquarters, $website, $size_dc_plan, $news_articles, $special_notes,$cfo_assistant, $new_linkedin, $state, $salesmen);
    // set parameters and execute
    $stmt->execute();
    
   
    
    if ($stmt)
    {
        echo "thank you, add another recond? <a href='datainputarea.php'>Click here</a><br />Go to leads page <a href='clients.php'>Click here</a><br />Or if you're done logout<a href='index.html'>Logout</a>";
    }
    else 
    {
        echo "Error: Contact Dylan";
    }
    $stmt->close();
    $conn->close();
?>