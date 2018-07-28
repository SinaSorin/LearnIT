<?php
include_once 'dbh.inc.php';
$capitol=mysqli_real_escape_string($conn,$_POST['capitol']);
echo 
$capitol;
	$sql="INSERT INTO capitole(titlu) VALUES('$capitol')";
	$result=mysqli_query($conn,$sql);
	header("Location: ../lectii.php");
	exit();

 ?>