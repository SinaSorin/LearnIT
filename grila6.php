<?php
session_start();
include_once 'include/dbh.inc.php';
$id_test=$_GET['id_test'];
$var=$_GET['var'];
if(isset($_POST['submitq']))
{
	$i=0;
	$sql1="SELECT * FROM intrebari WHERE id_test=$id_test";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1))
	{
		while($row=mysqli_fetch_assoc($result1))
		{
			$i++;
			$raspuns_corect=$_POST["corect$i"];
			$id_intrebare=$row['id'];
			for($j=1;$j<=$var;$j++)
				{	
					$varianta=$_POST["var$i$j"];
					if($raspuns_corect==$j)
						$raspuns=1;
					else
						$raspuns=0;
					$sql2="INSERT INTO raspuns(continut,corect,id_intrebare) VALUES('$varianta','$raspuns',$id_intrebare)";
					$result2=mysqli_query($conn,$sql2);
		}
	}
}
}

header("Location: lectii.php");
?>