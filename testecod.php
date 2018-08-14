<?php
session_start();
include_once 'include/dbh.inc.php';
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	padding:12px;
	padding-top:15px;
	background-color:#ffffffb5;
	margin-top:30px;
}
.glyphicon-ok {
	color:green;
}
.glyphicon-remove {
	color:red;
}
.creaza {
	float:right;	
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
		$id_user=$_SESSION['u_id'];
		$user_status=$_SESSION['u_status'];
		$user=$_SESSION['u_uid'];
	if($user_status==1)
		echo "<a href='toti.php'><div class='cont'>$user</div></a>";
	else
		echo "<a href='cont.php'><div class='cont'>$user</div></a>";
	}
	echo "<div class='butoane'>";
	echo "<a href='salucrez.php' class='butonn'>Rank</a>";
	echo "</div>";
	
	?>	
	
  </div>
  </div>
<div class="tot">
<?php
$sql2="SELECT * FROM user WHERE user_id='$id_user'";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0)
{
	while($row2=mysqli_fetch_assoc($result2))
	{
		$status=$row2['user_status'];
		if($status==1 or $status==2)
			echo "<a href='crearetestcod.php' class='creaza'><button>Creează o problemă</button></a>";
	}
}

$sql="SELECT * FROM test_cod";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$nr=mysqli_num_rows($result);
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$i++;
		$id=$row['id'];
		if($id_user==$row['id_user'])
			echo "<p title='Nu poti rezolva propriile teste!'>Test$i <span class='glyphicon glyphicon-remove'></span> </p>";
		else
		{
			$sql1="SELECT * FROM user_cod WHERE id_user='$id_user' AND id_test='$id'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>0)
				echo "<p><a href='rezolvaredateiesire.php?subject=$id'>Test$i</a><span class='glyphicon glyphicon-ok'></span></p> ";
			else	
				echo "<p><a href='rezolvaredateiesire.php?subject=$id'>Test$i</a></p>";
		}
		
	}
	
}









?>
</div>
</body>
</html>