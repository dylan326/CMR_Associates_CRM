<html>
    <head><title>Edit specia notes</title></head>
    <body>
        <h2>Edit the clients special notes</h2>
        <form action="specialnotes_edit2.php" method="post">
            <input type ="text" name="new_specialnotes" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update special notes">
            
        </form>
    </body>
</html>