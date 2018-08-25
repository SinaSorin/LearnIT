<?php
include_once 'dbh.inc.php';
$id_capitol=$_GET['id'];

$sql1="DELETE FROM capitole WHERE id=$id_capitol";
$result1=mysqli_query($conn,$sql1);

$sql2="SELECT * FROM lectii WHERE id_capitol=$id_capitol";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0)
{
	while($row2=mysqli_fetch_assoc($result2))
	{
		$id_lectie=$row2['id'];
		
		$sql3="DELETE FROM lectii WHERE id=$id_lectie";
		$result3=mysqli_query($conn,$sql3);
		
		$sql4="SELECT * FROM test WHERE id_lectie=$id_lectie";
		$result4=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result4)>0)
		{
			while($row4=mysqli_fetch_assoc($result4))
			{
				$id_test=$row4['id'];
				
				$sql5="DELETE FROM test WHERE id=$id_test";
				$result5=mysqli_query($conn,$sql5);
				
				$sql6="SELECT * FROM intrebari WHERE id_test=$id_test";
				$result6=mysqli_query($conn,$sql6);
				if(mysqli_num_rows($result6))
				{
					while($row6=mysqli_fetch_assoc($result6))
					{
						$id_intrebare=$row6['id'];
						
						$sql7="DELETE FROM intrebari WHERE id=$id_intrebare";
						$result7=mysqli_query($conn,$sql7);
						
						$sql8="SELECT * FROM raspuns WHERE id_intrebare=$id_intrebare";
						$result8=mysqli_query($conn,$sql8);
						if(mysqli_num_rows($result8)>0)
						{
							while($row8=mysqli_fetch_assoc($result8))
							{
								$id_raspuns=$row8['id'];
								
								$sql9="DELETE FROM raspuns WHERE id=$id_raspuns";
								$result9=mysqli_query($conn,$sql9);
							}
						}
						else
						{
							header("Location: ../lectii.php");
						}
					}
				}
				else
				{
					header("Location: ../lectii.php");
				}
				
			}
		}
		else
		{
			header("Location: ../lectii.php");
		}
		
		
	}
}
else
{
	header("Location: ../lectii.php");
}
header("Location: ../lectii.php");











?>