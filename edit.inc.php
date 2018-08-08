<?php
session_start();
include_once 'dbh.inc.php';
$id=$_GET['subject'];
if(isset($_POST['submit'])){
	$titlu=mysqli_real_escape_string($conn,$_POST['titlu']);
	$content=mysqli_real_escape_string($conn,$_POST['content']);
	if(empty($titlu) || empty($content) || empty($capitol)){
		header("Location: ../editarelectie.php?gol");
	}
	else{
		
		$id_user=$_SESSION['u_id'];
		$sql="UPDATE lectii
SET titlu = '$titlu' , lectie = '$content'
WHERE id='$id';";
		mysqli_query($conn,$sql);
		header("Location: ../lectiecapitol.php?subject=$capitol");

	}
}
 ?>