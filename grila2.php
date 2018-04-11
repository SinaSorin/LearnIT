<?php
session_start();
include_once 'include/dbh.inc.php';
 ?>
<?php 
if(isset($_POST['submit']))
{
	$titlu=$_POST['titlu'];
	$id_lectie=$_GET['subject'];
	$id_user=$_SESSION['u_id'];
	$sql1="SELECT * FROM  test WHERE titlu='$titlu'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)==0)
	{
		$sql2="INSERT INTO test(id_user,id_lectie,titlu) VALUES($id_user,$id_lectie,'$titlu')";
		$result2=mysqli_query($conn,$sql2);
	}
}
?>
<html>
	<head>
	</head>
	<body>
	<?php
	echo 
	"<form action='grila3.php?titlu=$titlu' method='POST'>
		<input type='number' min='1' max='10' name='nr'/></br>
		<input type='submit' value='submit' name='submitnr'/>
		</form>
	";
?>

	</body>
</html>