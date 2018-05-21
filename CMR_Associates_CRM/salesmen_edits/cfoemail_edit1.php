<html>
    <head><title>Edit the CFO's Email</title></head>
    <body>
        <h2>Edit the CFO's email</h2>
        <form action="cfoemail_edit2.php" method="post">
            <input type ="text" name="new_cfo_email" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update CFO Email">
            
        </form>
    </body>
</html>