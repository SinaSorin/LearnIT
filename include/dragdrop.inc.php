<?php
include_once 'dbh.inc.php';
session_start();
$id_user=$_SESSION['u_id'];
if(isset($_POST['submit']))
{
$i=$_POST['imp'];
$cod=mysqli_real_escape_string($conn,$_POST['content']);
$enunt=mysqli_real_escape_string($conn,$_POST['enunt']);
$j=$_POST['imp2'];
if($i==0)
	header("Location: ../creareex.php?introdudatedeiesire!");
else
{
	$adev=1;
	for($a=1;$a<=$i;$a++)
		{
			$data=$_POST["data$a"];
			if(strpos($cod,$data)==0)
				$adev=0;
		}
	if($adev==0)
		header("Location: ../creareex.php?introdudatedeiesire!");
	else
	{
		$sql1="INSERT INTO dragdrop(id_user,enunt,cod) VALUES('$id_user','$enunt','$cod')";
		$result1=mysqli_query($conn,$sql1);
		$sql2="SELECT * FROM dragdrop WHERE enunt='$enunt'";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0)
		{
			while($row=mysqli_fetch_assoc($result2))
			{
				$id=$row['id'];
			}
		}
		for($a=1;$a<=$i;$a++)
		{
			$data=mysqli_real_escape_string($conn,$_POST["data$a"]);
			$sql3="INSERT INTO variante(id_test,varianta,corect) VALUES('$id','$data',1)";
			$result3=mysqli_query($conn,$sql3);
		}
		for($a=1;$a<=$j;$a++)
		{
			$data=mysqli_real_escape_string($conn,$_POST["dataf$a"]);
			$sql3="INSERT INTO variante(id_test,varianta,corect) VALUES('$id','$data',0)";
			$result3=mysqli_query($conn,$sql3);
		}
		header("Location: ../testedrag.php");
		
		
	}
}
}
?>