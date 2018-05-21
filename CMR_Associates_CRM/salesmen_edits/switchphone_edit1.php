<html>
    <head><title>Edit Client Phone</title></head>
    <body>
        <h2>Edit the clients swithch board phone number</h2>
        <form action="switchphone_edit2.php" method="post">
            <input type ="text" name="new_sb_phone" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update Switchboard Phone">
            
        </form>
    </body>
</html>