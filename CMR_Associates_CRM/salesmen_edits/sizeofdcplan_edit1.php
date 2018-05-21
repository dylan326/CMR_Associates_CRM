<html>
    <head><title>Edit the size of the DC plan</title></head>
    <body>
        <h2>Edit the size of the DC plan</h2>
        <form action="sizeofdcplan_edit2.php" method="post">
            <input type ="text" name="new_size_of_dc_plan" >
            <input type = "hidden" name="details_id" value=<?php echo $_GET['details_id']; ?> >
            <input type="submit" value = "Update size of DC plan">
            
        </form>
    </body>
</html>