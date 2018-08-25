<?php
session_start();
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){
	$titlu=mysqli_real_escape_string($conn,$_POST['titlu']);
	$content=mysqli_real_escape_string($conn,$_POST['content']);
	$id_capitol=$_GET['id'];
	echo $id_capitol;
	$capitol=$_GET['subject'];
	if(empty($titlu) || empty($content)){
		header("Location: ../crearelectie.php?gol");
	}
	else{
		$id_user=$_SESSION['u_id'];
		$sql="INSERT INTO lectii (id_user,id_capitol,capitol,titlu,lectie) VALUES ('$id_user','$id_capitol','$capitol','$titlu','$content')";
		mysqli_query($conn,$sql);
		header("Location: ../lectiecapitol.php?subject=$capitol & id=$id_capitol");

	}
}
 ?>