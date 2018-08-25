<?php
include_once 'dbh.inc.php';
$id_lectie=$_GET['id'];

$sql="SELECT * FROM lectii WHERE id=$id_lectie";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
	while($row=mysqli_fetch_assoc($result))
	{
		$capitol=$row['capitol'];
		$id_capitol=$row['id_capitol'];
	}
}

$sql1="DELETE FROM lectii WHERE id=$id_lectie";
$result1=mysqli_query($conn,$sql1);

	$sql2="SELECT * FROM test WHERE id_lectie=$id_lectie";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0)
		{
			while($row2=mysqli_fetch_assoc($result2))
			{
				$id_test=$row2['id'];
				
				$sql3="DELETE FROM test WHERE id=$id_test";
				$result3=mysqli_query($conn,$sql3);
				
				$sql4="SELECT * FROM intrebari WHERE id_test=$id_test";
				$result4=mysqli_query($conn,$sql4);
				if(mysqli_num_rows($result4))
				{
					while($row4=mysqli_fetch_assoc($result4))
					{
						$id_intrebare=$row4['id'];
						
						$sql5="DELETE FROM intrebari WHERE id=$id_intrebare";
						$result5=mysqli_query($conn,$sql5);
						
						$sql6="SELECT * FROM raspuns WHERE id_intrebare=$id_intrebare";
						$result6=mysqli_query($conn,$sql6);
						if(mysqli_num_rows($result6)>0)
						{
							while($row6=mysqli_fetch_assoc($result6))
							{
								$id_raspuns=$row6['id'];
								
								$sql7="DELETE FROM raspuns WHERE id=$id_raspuns";
								$result7=mysqli_query($conn,$sql7);
							}
						}
						else
						{
							header("Location: ../lectiecapitol.php?subject=$capitol & id=$id_capitol");
						}
					}
				}
				else
				{
					header("Location: ../lectiecapitol.php?subject=$capitol & id=$id_capitol");
				}
				
			}
		}
		else
		{
			header("Location: ../lectiecapitol.php?subject=$capitol & id=$id_capitol");
		}

header("Location: ../lectiecapitol.php?subject=$capitol & id=$id_capitol");





?>