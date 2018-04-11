<?php
include_once 'dbh.inc.php';
$id=$_GET['subject'];
if(isset($_POST["submit$id"]))
{
	$sql="UPDATE user
SET user_status = 3 
WHERE user_id ='$id';";
	$result=mysqli_query($conn,$sql);
	header("Location: ../toti.php");
	exit();
}


?>