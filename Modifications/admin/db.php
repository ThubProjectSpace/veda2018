<?php
error_reporting('all');
$con = mysqli_connect("localhost","thub","A9#AEc#321","veda2017");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>