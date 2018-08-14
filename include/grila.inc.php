<?php
session_start();
include_once 'dbh.inc.php';

$id_lectie=$_GET['subject'];
$nr_intrebari=mysqli_real_escape_string($conn,$_POST['imp']);
if($nr_intrebari==0)
	header("Location: ../grila1.php?subject=$id_lectie");
else
	{
		for($i=1;$i<=$nr_intrebari;$i++)
		{
			$nr_raspunsuri=mysqli_real_escape_string($conn,$_POST["nr$i"]);
			if($nr_raspunsuri==0)
					header("Location: ../grila1.php?subject=$id_lectie");
		}
		$user=$_SESSION['u_id'];
		$sql1="INSERT INTO test(id_user,id_lectie) VALUES('$user','$id_lectie')";
		$result1=mysqli_query($conn,$sql1);
		$id_test=mysqli_insert_id($conn);
		for($i=1;$i<=$nr_intrebari;$i++)
		{
			$intrebare=mysqli_real_escape_string($conn,$_POST["data$i"]);
			$sql2="INSERT INTO intrebari(continut,id_test) VALUES('$intrebare','$id_test')";
			$result2=mysqli_query($conn,$sql2);
			$id_intrebare=mysqli_insert_id($conn);
			$nr_raspunsuri=mysqli_real_escape_string($conn,$_POST["nr$i"]);
			$raspuns_corect=mysqli_real_escape_string($conn,$_POST["radio$i"]);
			for($j=1;$j<=$nr_raspunsuri;$j++)
			{
				$varianta=mysqli_real_escape_string($conn,$_POST["raspuns$i$j"]);
					if($raspuns_corect==$j)
						$raspuns=1;
					else
						$raspuns=0;
				$sql3="INSERT INTO raspuns(continut,corect,id_intrebare) VALUES('$varianta','$raspuns',$id_intrebare)";
				$result3=mysqli_query($conn,$sql3);
			}
		}
	}
 ?>

