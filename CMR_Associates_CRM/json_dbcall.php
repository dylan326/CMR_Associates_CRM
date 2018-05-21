<?php
include('dbopen.php');
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);


//$result = $conn->query("SELECT customer_name FROM ".$obj->table." LIMIT ".$obj->limit);
$result = $conn->query("SELECT reminder, date FROM ".$obj->table."");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);



?>