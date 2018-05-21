<html>
    <head><title>Edit CFO name</title></head>
    <body>
        <h2>Edit the CFO's name</h2>
        <form action="cfoname_edit2.php" method="post">
            <input type ="text" name="new_cfo_name" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update CFO name">
            
        </form>
    </body>
</html>