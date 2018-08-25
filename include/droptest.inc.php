<?php
include_once 'dbh.inc.php';

$id_test=$_GET['id'];
$sql="SELECT * FROM test WHERE id=$id_test";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
	while($row=mysqli_fetch_assoc($result))
	{
		$id_lectie=$row['id_lectie'];
	}
}
$sql="SELECT * FROM lectii WHERE id=$id_lectie";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
	while($row=mysqli_fetch_assoc($result))
	{
		$titlu=$row['titlu'];
	}
}


$sql1="DELETE FROM test WHERE id=$id_test";
				$result1=mysqli_query($conn,$sql1);
				
				$sql2="SELECT * FROM intrebari WHERE id_test=$id_test";
				$result2=mysqli_query($conn,$sql2);
				if(mysqli_num_rows($result2))
				{
					while($row2=mysqli_fetch_assoc($result2))
					{
						$id_intrebare=$row2['id'];
						
						$sql3="DELETE FROM intrebari WHERE id=$id_intrebare";
						$result3=mysqli_query($conn,$sql3);
						
						$sql4="SELECT * FROM raspuns WHERE id_intrebare=$id_intrebare";
						$result4=mysqli_query($conn,$sql4);
						if(mysqli_num_rows($result4)>0)
						{
							while($row4=mysqli_fetch_assoc($result4))
							{
								$id_raspuns=$row4['id'];
								
								$sql5="DELETE FROM raspuns WHERE id=$id_raspuns";
								$result5=mysqli_query($conn,$sql5);
							}
						}
						else
						{
							header("Location: ../continutlectie.php?subject=$titlu & id_lectie=$id_lectie");
						}
					}
				}
				else
				{
					header("Location: ../continutlectie.php?subject=$titlu & id_lectie=$id_lectie");
				}

header("Location: ../continutlectie.php?subject=$titlu & id_lectie=$id_lectie");





















?>