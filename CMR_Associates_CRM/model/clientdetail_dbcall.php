<?php
       
  include('/home/u806686084/public_html/dbopen.php');
        // GET ID FROM THE URL
        $details_id = $_GET['details_id'];
        $sql = "SELECT * FROM details WHERE details_id = ?";
        if($pre = $conn->prepare($sql)) 
        {
            $pre->bind_param('i', $id);
            $id = $details_id;
            $pre->execute();
            $result = $pre->get_result();
            if($row= $result->fetch_assoc())
            { if ($row['hot_lead'] != 1)
              {
                echo "<h3>"
                ."<u>"."Name: " ."</u>". " ".$row['name']." -- <button style='background-color: blue; color: white;' id='makeithot' onclick='changeDBhot();  '>Cold lead(click to make hot)</button>" ."<br />". " "
                . "<u>Address: </u>". " ".$row['address']."<br />"
                ."<u>"."Switch board phone number: " ."</u>". " ".$row['sb_phone'] ."--<a href='./salesmen_edits/switchphone_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                . "<u>General Email: </u>". " ".$row['general_email']."--<a href='./salesmen_edits/generalemail_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                ."<u>"."CFO Name: " ."</u>". " ".$row['cfo_name'] ."--<a href='./salesmen_edits/cfoname_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                . "<u>CFO Phone Number: </u>". " ".$row['cfo_phone']."--<a href='./salesmen_edits/cfonumber_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                ."<u>"."CFO Email: " ."</u>". " ".$row['cfo_email'] ."--<a href='./salesmen_edits/cfoemail_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                ."<u>"."Linkedin: " ."</u>". " <a href='".$row['linkedin']."'> " .$row['linkedin']."</a>--<a href='./salesmen_edits/linkedin_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                ."<u>"."CFO Assistant: " ."</u>". " ".$row['cfo_assistant'] ."--<a href='./salesmen_edits/cfoassistant_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                 . "<u>Annual Sales: </u>". " ".$row['annula_sales']."--<a href='./salesmen_edits/annualsales_edit1.php?details_id=$details_id'>Edit</a>"."<br />"
                ."<u>"."Number of Employees: " ."</u>". " ".$row['number_of_employees']."--<a href='./salesmen_edits/numberofemployees_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                . "<u>Is this the Headquarters?: </u>". " ".$row['is_headquarters']."<br />". " "
                ."<u>"."Website: " ."</u>". " <a href='".$row['website']."'> " .$row['website']."</a>--<a href='./salesmen_edits/website_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                . "<u>Size of DC Plan: </u>". " ".$row['size_dc_plan']."--<a href='./salesmen_edits/sizeofdcplan_edit1.php?details_id=$details_id'>Edit</a>"."<br />"
                ."<u>"."Recent News Articles: " ."</u>". " ".$row['news_articles'] ."<br />". " "
                . "<u>Special Notes: </u>". " ".$row['special_notes']."</a>--<a href='./salesmen_edits/specialnotes_edit1.php?details_id=$details_id'>Edit</a>" 
                
                ."</h3>". "<br />";
              }
              
              else 
              {
                  echo "<h3>"
                ."<u>"."Name: " ."</u>". " ".$row['name']." -- <button style='background-color: green; color: white;' id='makeitcold' onclick='changeDBcold();  '>Hot Lead (click to make cold)</button>" ."<br />". " "
                . "<u>Address: </u>". " ".$row['address']."<br />"
                ."<u>"."Switch board phone number: " ."</u>". " ".$row['sb_phone'] ."--<a href='./salesmen_edits/switchphone_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                . "<u>General Email: </u>". " ".$row['general_email']."--<a href='./salesmen_edits/generalemail_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                ."<u>"."CFO Name: " ."</u>". " ".$row['cfo_name'] ."--<a href='./salesmen_edits/cfoname_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                . "<u>CFO Phone Number: </u>". " ".$row['cfo_phone']."--<a href='./salesmen_edits/cfonumber_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                ."<u>"."CFO Email: " ."</u>". " ".$row['cfo_email'] ."--<a href='./salesmen_edits/cfoemail_edit1.php?details_id=$details_id'>Edit</a>"."<br />". " "
                ."<u>"."Linkedin: " ."</u>". " <a href='".$row['linkedin']."'> " .$row['linkedin']."</a>--<a href='./salesmen_edits/linkedin_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                ."<u>"."CFO Assistant: " ."</u>". " ".$row['cfo_assistant'] ."--<a href='./salesmen_edits/cfoassistant_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                 . "<u>Annual Sales: </u>". " ".$row['annula_sales']."--<a href='./salesmen_edits/annualsales_edit1.php?details_id=$details_id'>Edit</a>"."<br />"
                ."<u>"."Number of Employees: " ."</u>". " ".$row['number_of_employees']."--<a href='./salesmen_edits/numberofemployees_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                . "<u>Is this the Headquarters?: </u>". " ".$row['is_headquarters']."<br />". " "
                ."<u>"."Website: " ."</u>". " <a href='".$row['website']."'> " .$row['website']."</a>--<a href='./salesmen_edits/website_edit1.php?details_id=$details_id'>Edit</a>" ."<br />". " "
                . "<u>Size of DC Plan: </u>". " ".$row['size_dc_plan']."--<a href='./salesmen_edits/sizeofdcplan_edit1.php?details_id=$details_id'>Edit</a>"."<br />"
                ."<u>"."Recent News Articles: " ."</u>". " ".$row['news_articles'] ."<br />". " "
                . "<u>Special Notes: </u>". " ".$row['special_notes']."</a>--<a href='./salesmen_edits/specialnotes_edit1.php?details_id=$details_id'>Edit</a>" 
                
                ."</h3>". "<br />";
                  
              }
            }
        }
        else 
        {
            echo "System error: contact Dylan";
        }
        
    ?>