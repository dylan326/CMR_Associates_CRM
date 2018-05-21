<html>
    <head><title>Edit Number of employees</title></head>
    <body>
        <h2>Edit the number of employees</h2>
        <form action="numberofemployees_edit2.php" method="post">
            <input type ="text" name="new_number_of_employees" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update number of employees">
            
        </form>
    </body>
</html>