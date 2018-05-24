<?php
require('db.php');
$id1=$_REQUEST['id'];
$query1 = "DELETE FROM co WHERE id='".$id1."' "; 
$result1 = mysqli_query($con,$query1) or die ( mysqli_error());
header("Location: coordinator.php?msg=2"); 
?>