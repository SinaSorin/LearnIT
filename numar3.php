<?php 
session_start();
include_once 'include/dbh.inc.php';
$id_user=$_SESSION['u_id'];
$sql8="SELECT * FROM loto WHERE id_user=$id_user AND data=CURDATE()";
$result8=mysqli_query($conn,$sql8);
if(mysqli_num_rows($result8)!=0)
{
	header("Location: numar2.php");
}
 if(isset($_POST['submit']))
	{
		$nr=$_POST['nr'];
		$sql5="SELECT * FROM loto WHERE id_user=$id_user";
		$result5=mysqli_query($conn,$sql5);
		if(mysqli_num_rows($result5)==0)
		{
			$sql6="INSERT INTO loto(id_user,data) VALUES($id_user,CURDATE())";
			$result6=mysqli_query($conn,$sql6);

						$nr_loto=$numar=mt_rand(1,100);
						if($nr==$nr_loto)
						{
							$xp=100;
							$text="<p>Felicitări! Ai câștigat un bonus de 100xp!<br>Revino și mâine</p>";
						}
						else
							if(abs($nr-$nr_loto)<=10)
							{
								$xp=20;
								$text="<p>Ai fost foarte aproape! 20 xp pentru tine!<br>Mai încearcă și mâine!";
							}
							else
							{
								$xp=5;
								$text="Nu te descuraja! +5xp!";
								
							}
						$sql11="SELECT * FROM rank WHERE id_user=$id_user";
							$result11=mysqli_query($conn,$sql11);
							if(mysqli_num_rows($result11)>0)
							{
								while($row=mysqli_fetch_assoc($result11))
								{
									$exp=$row['xp'];
									$exp=$exp+$xp;
									$rank=$row['nivel'];
									if($exp>$rank*100)
									{
										$rank=$rank+1;
										$exp=$exp-$rank*100;
									}
									$sql="INSERT INTO rank(id_user,rank,xp) VALUES(1,1,1)";
	$result=mysqli_query($conn,$sql);
									
								}
								
							}

				 
		}
		else
		{
			
				$sql9="UPDATE loto SET data=CURDATE() WHERE id_user=$id_user";
				$result9=mysqli_query($conn,$sql9);

						$nr_loto=$numar=mt_rand(1,100);
						if($nr==$nr_loto)
						{
							$xp=100;
							$text="<p>Felicitări! Ai câștigat un bonus de 100xp!<br>Revino și mâine</p>";
						}
						else
							if(abs($nr-$nr_loto)<=10)
							{
								$xp=20;
								$text="<p>Ai fost foarte aproape! 20 xp pentru tine!<br>Mai încearcă și mâine!";
							}
							else
							{
								$xp=5;
								$text="Nu te descuraja! +5xp!";
								
							}
						$sql11="SELECT * FROM rank WHERE id_user=$id_user";
							$result11=mysqli_query($conn,$sql11);
							if(mysqli_num_rows($result11)>0)
							{
								while($row=mysqli_fetch_assoc($result11))
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
	?>
	<html>
<head>
<link rel="stylesheet" href="styles/bara.css">
<style>
 * {
	
	font-family:Helvetica;
  }
  body {
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
  }
  

.tot {
	color:black;
	width:70%;
	height:90%;
	margin-left:auto;
	margin-right:auto;
	padding:12px;
	margin-top:-15px;
}

.ruleta{
	animation: rotatie 2s ease-in-out forwards;
	width:100%;
}
@keyframes rotatie {
	from{
		transform: rotateX(0deg);	
	}
	to {
		
		transform: rotatez(180deg);
	}
}
.btn {
	background-color:#10BBB3;
	width:fit-content;
	display:inline;
	padding:10px;
	color:white;
	border:1px solid black;
	font-size:20px;
}
.btn:hover{
	background-color:#208b86;
	cursor:pointer;
	
}
.numar {
	position: relative;
    margin-top: -33%;
    font-size: 13vh;
	text-align:center;
	animation: numar 2s  2s ease-in-out forwards;
	opacity: 0;
}
@keyframes numar {
	from{
		opacity: 0;
	}
	to {
		
		opacity: 1;
	}
}
.rezultat {
	position: relative;
	margin-top:250px;
	text-align:center;
	animation: rezultat 2s  3s ease-in-out forwards;
	visibility: hidden;
	font-size:23px;
	color:#10BBB3;
	font-weight:bold;
}
@keyframes rezultat {
	from{
		visibility: hidden;
	}
	to {
		
		visibility: visible;
	}
}

</style>
</head>
<body>

<div class="bara">
	<?php 
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Inregistreaza-te</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Conecteaza-te</div></a>';
	else
		echo '<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconectează-te"> 
					</form> ';
  ?>
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
	echo "</div>";
	?>	
	
  </div>
  </div>



	<div class="tot">
	<div>
	<img src="ruleta.png" class="ruleta">
 </div>
	
	<?php
		echo "<div class='numar'>$nr</div>";
		echo "<div class='rezultat'>$nr_loto<br>";
		echo $text.'</div>';

	?>
	</div>
	
 
 <body>
 </html>
