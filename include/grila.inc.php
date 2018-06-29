<?php
session_start();
include_once 'dbh.inc.php';
$nr=$_GET['subject'];
$var=$_GET['var'];
$id=$_GET['id'];
$titlu=$_GET['titlu'];

if(isset($_POST["submitq"])) {
	$user=$_SESSION['u_id'];
			$sql1="SELECT * FROM test WHERE titlu=$titlu";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)==0)
			{
				$sql2="INSERT INTO test(id_user,id_lectie,titlu) VALUES('$user','$id','$titlu')";
				mysqli_query($conn,$sql2);
			}
			else
			{
				header ("Location: ../grila.php?alege alt titlu!");
				exit();
			}

	for($i=1;$i<=$nr;$i++)
	{
		$intrebare=$_POST["intrebare$i"];
		$sql3="SELECT * FROM test WHERE titlu=$titlu AND id_lectie=$id";
		$result3=mysqli_query($conn,$sql3);
		if(mysqli_num_rows($result3)>0)
		{
			while($row3=mysqli_fetch_assoc($result3))
			{
				$id_test=$row3['id'];
				$sql="INSERT INTO intrebari(continut,id_test) VALUES('$intrebare',$id_test)";
				mysqli_query($conn,$sql);
				$raspuns_corect=$_POST["corect$i"];
				for($j=1;$j<=$var;$j++)
				{	
					$varianta=$_POST["var$i$j"];
					if($raspuns_corect==$j)
						$raspuns=1;
					else
						$raspuns=0;
					$sql4="SELECT * FROM intrebari WHERE continut=$intrebare";
					$result4=mysqli_query($conn,$sql4);
					if(mysqli_num_row($result4)>0)
					{
						while($row5=mysqli_fetch_assoc($result4))
						{
							$id_intrebare=$row5['id'];
							$sql="INSERT INTO raspuns(continut,corect,id_intrebare) VALUES('$varianta','$raspuns',$id_intrebare)";
							mysqli_query($conn,$sql);
						}
					}
					
			
				}	
			}
			
		
		}
		
		
	}
}
 ?>
