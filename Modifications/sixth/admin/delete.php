<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM event WHERE id='".$id."' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: events.php?msg=2"); 
?>