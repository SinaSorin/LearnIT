<?php
session_start();
include_once 'include/dbh.inc.php';
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
  
 
	.titlu {
		font-size:52px;
		width:40%;
	}
	
.tot {
	color: black;
    width: 70vw;
    margin-left: auto;
    margin-right: auto;
    padding: 2vh;
    padding-top: 2vh;
    margin-top: 1vh;
}

.ruleta{
	animation: rotatie 2s ease-in-out forwards;
	width:100%;
}
@keyframes rotaties {
	from{
		transform: rotateX(0deg);	
	}
	to {
		
		transform: rotatez(180deg);
	}
}
#numar {
	position: relative;
    margin-top: -23vw;
    font-size: 5vw;
    text-align: center;
    z-index: 2;
    background-color: #e5ebe7;
}
#btn {
	background-color:#10BBB3;
	width:fit-content;
	display:inline;
	padding:10px;
	position:relative;
	color:white;
	border:1px solid black;
	font-size:3vh;
}
#btn:hover{
	background-color:#208b86;
	cursor:pointer;
	
}
.deja {
	text-align:center;
	margin-top:200px;
	font-size:30px;
}

#hole{
	position: absolute;
	z-index:3;
	top:38vh;
	left:43vw;
	width: 13vw;
	height: 13vw;
	border-radius:50%;
	box-shadow: 0 0 0 99999px rgba(0, 0, 0, .8);
	display:none;
	transition: width 2s, height 2s, transform 2s;
}
#blocheaza {
	position:absolute;
	width:100%;
	height:100%;
	top:0px;
	z-index:3;
	display:none;
}
#mesaj {
	position:relative;
	color:black;
	background-color:#ffffff90;
	padding:12px;
	bottom:16vh;
	display:none;
	right: 13vw;
    width: 36vw;
	text-align:center;
	font-size:3vh;
}

</style>
</head>
<body>
<div class="bara">
	<?php 
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Inrgistreaza-te</div></a>

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

		  <?php

if(isset($_SESSION['u_id']))
{
	$id_user=$_SESSION['u_id'];
	
	$sql8="SELECT * FROM loto WHERE id_user=$id_user AND data=CURDATE()";
			$result8=mysqli_query($conn,$sql8);
			if(mysqli_num_rows($result8)==0)
			{
				echo "<div class='tot'>
	
	
				<div>
					<img src='ruleta.png' class='ruleta'>
	

		<form method='POST' action='numar3.php'>
			<center>
			<input type='number' min='1' max='100' id='numar' name='nr' required /></br>
			
			<input type='submit' value='submit' id='btn' name='submit' required />
			</center>
		</form>
 </div>
 </div>";
	}
	else 
echo '<div class="deja">Deja ai făcut provocarea azi! Încearcă mâine!</div>';}
	?>
<div id="hole"><div id="mesaj">În fiecare zi este generat un număr la întamplare. O dată pe zi ai șansa de a ghici numărul respectiv și esti recompensat în funcție de cât de aproape ai fost cu xp.</div></div>
<div id="blocheaza"></div> 
<?php
$sql9="SELECT * FROM loto WHERE id_user=$id_user";
$result9=mysqli_query($conn,$sql9);
if(mysqli_num_rows($result9)==0)
	echo '<script src="scripts/alert.js"></script>';
?>

 <body>
 </html>

