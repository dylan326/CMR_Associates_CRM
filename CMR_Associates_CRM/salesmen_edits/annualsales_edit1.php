<html>
    <head><title>Edit Clients Annual Sales</title></head>
    <body>
        <h2>Edit the clients annual sales</h2>
        <form action="annualsales_edit2.php" method="post">
            <input type ="text" name="new_annual_sales" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update annual sales">
            
        </form>
    </body>
</html>