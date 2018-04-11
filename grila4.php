<?php
session_start();
include_once 'include/dbh.inc.php';
$nr=$_GET['nr'];
for($i=1;$i<=$nr;$i++)
{		
	$intrebare=$_POST["intrebare$i"];
	$titlu=$_GET["titlu"];
	$sql1="SELECT * FROM test WHERE titlu='$titlu'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>0)
	{
		while($row1=mysqli_fetch_assoc($result1))
		{
			$id_test=$row1['id'];
			$sql="INSERT INTO intrebari(continut,id_test) VALUES('$intrebare',$id_test)";
			$result=mysqli_query($conn,$sql);
		}
	}
}
 ?>
<?php 
 echo "<form action='grila5.php?id=$id_test' method='POST'>
				<input type='number' min='1' max='5' name='var'/></br>
				<input type='submit' value='submit' name='submitvar'/>
			</form> "
?>