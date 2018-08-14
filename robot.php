<?php
session_start();
include 'include/dbh.inc.php';

 ?>
<html>
<head>
 <link rel="stylesheet" href="styles/bara.css">

<style>
* {
	
	font-family:Helvetica;
  }
body{
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
}

.imagine{
		margin:5px;
		border:1px solid lightgrey;
		float:left;
		width:180px;
		}
		.imagine:hover{
		border:1px solid black;
		}
		.desc{
		padding:15px;
		text-align:center;
		}
		.imagine img{
		width:100%;
		height: auto;
		}
.tot {
	color:black;
	width:50%;
	margin-left:auto;
	margin-right:auto;
	padding:12px;
	padding-top:15px;
	margin-top:10px;
}
.butoane {
	position:absolute;
	left:15%;
	top:14px;
}
.butonn {
	color:white;
	margin-left:10px;
}
.butonn:hover {
	text-decoration:none;
	color:black;
}
</style>
</head>
<body>
<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconectează-te"> 
					</form>
					
		<div class='butoane'>
	<a href='salucrez.php' class='butonn'>Rank</a>
	
	</div>
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
	
	
	?>	
	
  </div>
  </div>
<div class="tot">
 <?php

$id_user=$_SESSION['u_id'];
$sql1="SELECT * FROM rank WHERE id_user='$id_user'";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$rank=$row['nivel'];
	}
}
$sql = "SELECT * FROM robot WHERE rank <= $rank"; // aici sunt afisate pozele pe care utilizatorul le-a incarcat de pe pagina club.php
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id=$row["id"];
			$rank=$row["rank"];
			$location=$row["robot"];
			echo" <div class='imagine'>
			<img src='$location'>
			<div class='desc'>
			Rank $rank
			</div>
			</div>";
		}
	}
	else
		echo "Nu ai robotei inca"

?>
</div>
</body>
</html>
  




