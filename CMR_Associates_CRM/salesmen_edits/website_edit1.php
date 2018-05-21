<html>
    <head><title>Edit Clients website</title></head>
    <body>
        <h2>Edit the clients website</h2>
        <form action="website_edit2.php" method="post">
            <input type ="text" name="new_website" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update website">
            
        </form>
    </body>
</html>