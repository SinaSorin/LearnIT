<?php 
session_start();
include_once 'include/dbh.inc.php';
?>
<html>
<head>
<link rel="stylesheet" href="styles/bara.css">
<style>
*{
	font-size:22px;	
	font-family:Helvetica;
	}
	body{
		background-color:#e5ebe7;
		margin:0px;
		padding:0px;
	}
	
.tot {
	color:black;
	width:70%;
	margin-left:auto;
	margin-right:auto;
	box-sizing:border-box;
	padding-top:15px;
	padding:30px;
	background-color:#ffffffb5;
	margin-top:30px;
}
.cod {
	border:2px solid #10BBB3;
	border-radius:20px;
	padding:30px;
	
}

.gresit {
	color:red;
	font-weight:bold;
}
.corect {
	color:green;
	font-weight:bold;
}
</style>
</head>
<body>
<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconecteaza-te"> 
					</form>
	   <div class="profil">
  
	<a href="index.php"><img src="logo.png" class="poza"></a>
	<?php 
	if(isset($_SESSION['u_id']))
	{
		$user_status=$_SESSION['u_status'];
		$user=$_SESSION['u_uid'];
	if($user_status==1)
		echo "<a href='toti.php'><div class='cont'>$user</div></a>";
	else
		echo "<a href='cont.php'><div class='cont'>$user</div></a>";
	}
		echo "<div class='butoane'>";
	echo "<a href='salucrez.php' class='butonn'>Rank</a>";
	echo "<a href='testedrag.php' class='butonn'>Exercitii</a>";
	echo "</div>";
	
	?>	
	
  </div>
  </div>
<div class="tot">
<div class='cod'>
<?php

$id_user=$_SESSION['u_id'];
$id=$_GET['subject'];
$sql="INSERT INTO user_drag(id_user,id_test) VALUES('$id_user','$id')";
$result=mysqli_query($conn,$sql);
$sql1="SELECT * FROM dragdrop WHERE id=$id";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{
	while($row=mysqli_fetch_assoc($result1))
		$cod=$row['cod'];
}
$sql2="SELECT * FROM variante WHERE id_test=$id";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0)
{
	$variante=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result2))
	{
		if($row['corect']==1)
		{
			$i++;
			$varianta=$row['varianta']."<span></span>";
			$variante[strpos($cod,$varianta)]=$row['varianta'];
		}
	}
}
ksort($variante);
$a=0;
$corect=array_values($variante);
 
 

$total=100;
$gresit=ceil(100/$i);
for($a=1;$a<=$i;$a++)
{	$raspuns=$_POST["id$a"];
	$b=$a-1;
	if(strcmp($raspuns,$corect[$b])!=0)
	{$total=$total-$gresit;
	  $cod=str_replace("$corect[$b]","<span class='gresit'>$raspuns</span>","$cod");
	}
	else
		$cod=str_replace("$corect[$b]","<span class='corect'>$raspuns</span>","$cod");
}
echo $cod;
if($total<0)
	$total=0;
echo '</div><br>Xp obtinut: ';
echo $total;

$sql3="SELECT * FROM rank WHERE id_user=$id_user";
		$result4=mysqli_query($conn,$sql3);
		if(mysqli_num_rows($result4)>0)
		{
			while($row=mysqli_fetch_assoc($result4))
			{
				$exp=$row['xp'];
				$exp=$exp+$total;
				$rank=$row['nivel'];
				if($exp>=$rank*100)
				{
					$exp=$exp-$rank*100;
					$rank=$rank+1;
				}
				$sql4="UPDATE rank
					SET nivel = '$rank' , xp= '$exp'
					WHERE id_user ='$id_user';";
				$result=mysqli_query($conn,$sql4);
									
									
			}
								
		}
?>

</div>
</body>
</html>