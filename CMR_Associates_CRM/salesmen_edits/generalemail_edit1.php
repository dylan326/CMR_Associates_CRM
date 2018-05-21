<html>
    <head><title>Edit Clients general email</title></head>
    <body>
        <h2>Edit the clients general email</h2>
        <form action="generalemail_edit2.php" method="post">
            <input type ="text" name="new_general_email" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update general email">
            
        </form>
    </body>
</html>