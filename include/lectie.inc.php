<?php
session_start();
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){
	$titlu=$_POST['titlu'];
	$content=$_POST['content'];
	$capitol=$_POST['capitol'];
	if(empty($titlu) || empty($content) || empty($capitol)){
		header("Location: ../b.html?empty");
	}
	else{
		$id_user=$_SESSION['u_id'];
		$sql="INSERT INTO lectii (id_user,capitol,titlu,lectie) VALUES ('$id_user','$capitol','$titlu','$content')";
		mysqli_query($conn,$sql);
		header("Location: ../lectiecapitol.php?subject=$capitol");

	}
}
 ?>