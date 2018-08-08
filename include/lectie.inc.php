<?php
session_start();
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){
	$titlu=mysqli_real_escape_string($conn,$_POST['titlu']);
	$content=mysqli_real_escape_string($conn,$_POST['content']);
	$capitol=mysqli_real_escape_string($conn,$_POST['capitol']);
	if(empty($titlu) || empty($content) || empty($capitol)){
		header("Location: ../crearelectie.php?gol");
	}
	else{
		$id_user=$_SESSION['u_id'];
		$sql="INSERT INTO lectii (id_user,capitol,titlu,lectie) VALUES ('$id_user','$capitol','$titlu','$content')";
		mysqli_query($conn,$sql);
		header("Location: ../lectiecapitol.php?subject=$capitol");

	}
}
 ?>