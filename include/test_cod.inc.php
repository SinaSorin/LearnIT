<?php
include_once 'dbh.inc.php';
session_start();
$id_user=$_SESSION['u_id'];
if(isset($_POST['submit']))
{
	$imp=$_POST['imp'];
	if($imp==0)
		header("Location: ../crearetestcod.php?introdudatedeiesire!");
	else
	{
		$enunt=mysqli_real_escape_string($conn,$_POST['enunt']);
		$cod=mysqli_real_escape_string($conn,$_POST['content']);
		$explicatie=mysqli_real_escape_string($conn,$_POST['explicatie']);
		$sql1="INSERT INTO test_cod(id_user,enunt,cod,explicatie) VALUES('$id_user','$enunt','$cod','$explicatie')";
		$result1=mysqli_query($conn,$sql1);
		$sql2="SELECT * FROM test_cod WHERE enunt='$enunt'";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0)
		{
			while($row=mysqli_fetch_assoc($result2))
			{
				$id=$row['id'];
			}
		}
		for($i=1;$i<=$imp;$i++)
		{
			$data=mysqli_real_escape_string($conn,$_POST["data$i"]);
			$sql3="INSERT INTO date_iesire(id_test,data) VALUES('$id','$data')";
			$result3=mysqli_query($conn,$sql3);
		}
		header("Location: ../testecod.php");
	}
}
?>


