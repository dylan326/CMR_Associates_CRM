<html>
    <head><title>Edit the CFO's Assistant</title></head>
    <body>
        <h2>Edit the CFO's Assistant</h2>
        <form action="cfoassistant_edit2.php" method="post">
            <input type ="text" name="new_cfo_assistant" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update CFO Assistant">
            
        </form>
    </body>
</html>