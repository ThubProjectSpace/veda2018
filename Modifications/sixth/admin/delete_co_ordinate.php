<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM ordinator WHERE id='".$id."' "; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: ordinators.php?msg=2"); 
?>