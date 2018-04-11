<?php
session_start();
include_once 'include/dbh.inc.php';
$id_test=$_GET['id'];
if(isset($_POST['submitvar']))
{
	$var=$_POST['var'];
	$sql="SELECT * FROM intrebari WHERE id_test=$id_test";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "<form action='grila6.php?id_test=$id_test & var=$var' method='POST'>";
		$i=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$i++;
			$intrebare=$row['continut'];
			echo $i.$intrebare."<br>";
			for($j=1;$j<=$var;$j++)
					echo "
							<input type='radio' value='$j' name='corect$i'>
							<input type='text' name='var$i$j'><br>";
				echo '<br>';
		}
		echo '<input type="submit" value="submit" name="submitq"/>
				  </form>';
		
	}
}
?>