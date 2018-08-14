<?php
session_start();
include_once 'include/dbh.inc.php';?>
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
</style>
</head>
<body>
<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconectează-te"> 
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
	echo "<a href='testecod.php' class='butonn'>Probleme</a>";
	echo "</div>";
	
	?>	
	
  </div>
  </div>
<div class="tot">
<?php
$id=$_GET['subject'];
$id_user=$_SESSION['u_id'];
$sql="SELECT * FROM  test_cod WHERE id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$enunt=$row['enunt'];
		$cod=$row['cod'];
		$explicatie=$row['explicatie'];
		echo $enunt."<br><br><div class='cod'>".$cod."</div><br>";
	}
}
$sql2="SELECT * FROM date_iesire WHERE id_test='$id'";
$result2=mysqli_query($conn,$sql2);
$nr=mysqli_num_rows($result2);
if(isset($_POST['submit']))
{
	$sql="INSERT INTO user_cod(id_user,id_test) VALUES('$id_user','$id')";
	$result=mysqli_query($conn,$sql);
	if($nr>0)
	{
		$i=0;
		$corect=0;
		echo "<h1>Rezolvare:";
		while($row2=mysqli_fetch_assoc($result2))
		{
			$i++;
			echo $row2["data"]." ";
			$data=$_POST["data$i"];
			if($data==$row2['data'])
				$corect++;
		}
	}
	echo "</h1><strong>Explicație</strong>: $explicatie<br>";
	echo "$corect răspunsuri corecte";
	if($corect==$nr)
	{
		$xp=10;
		$sql4="SELECT * FROM rank WHERE id_user=$id_user";
		$result4=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result4)>0)
		{
			while($row=mysqli_fetch_assoc($result4))
			{
				$exp=$row['xp'];
				$exp=$exp+$xp;
				$rank=$row['nivel'];
				if($exp>=$rank*100)
				{
					$exp=$exp-$rank*100;
					$rank=$rank+1;
				}
				$sql="UPDATE rank
					SET nivel = '$rank' , xp= '$exp'
					WHERE id_user ='$id_user';";
				$result=mysqli_query($conn,$sql);
									
									
			}
								
		}
	}
	
}
else
{
	$sql="SELECT * FROM user_cod WHERE id_user='$id_user' AND id_test='$id'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "<h1>Rezolvare:";
		$sql2="SELECT * FROM date_iesire WHERE id_test='$id'";
		$result2=mysqli_query($conn,$sql2);
		$nr=mysqli_num_rows($result2);
		if($nr>0)
			while($row2=mysqli_fetch_assoc($result2))
				echo $row2["data"]." ";
		echo "</h1><strong>Explicație</strong>: $explicatie <br>";
		echo 'Ai făcut deja acest test.';
	}
	else 
	{
		echo "Introdu datele de ieșire:<br>";
		echo "<form method='POST'>";
		for($i=1;$i<=$nr;$i++)
			echo "<input type='text' autocomplete='off' name='data$i' required>";
		echo "<br><input type='submit' name='submit' value='submit'></form>";
	}
	

}





?>
</div>
</body>
</html>