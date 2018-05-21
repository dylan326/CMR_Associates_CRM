<html>
    <head><title>Edit CFO number</title></head>
    <body>
        <h2>Edit the CFO's phone number</h2>
        <form action="cfonumber_edit2.php" method="post">
            <input type ="text" name="new_cfo_number" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update CFO number">
            
        </form>
    </body>
</html>