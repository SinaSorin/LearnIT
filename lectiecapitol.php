<?php
session_start();
include_once 'include/dbh.inc.php';
 ?>
<html>
 <head>
 <title>Lectii</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <link rel="stylesheet" href="styles/bara.css">
 <link rel="stylesheet" href="styles/modal.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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

.content {
	position:relative;
	width:840px;
	top:120px;
	margin-left:auto;
	margin-right:auto;
	
}
.capitol {
	position:relative;
	padding-top:80px;
	width:200px;
	height:200px;
	margin-top:60px;
	margin-left:60px;
	display:inline-block;
	background-color:#f5fff2;
	font-size:24px;
	font-family:Verdana;
	text-align:center;
	border:2px solid black;
	border-radius:5%;
	transition: .2s ease;
}
.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #0c615e54;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}
.capitol:hover {
	color:#f5fff2;
	transition: .2s ease;
}
.capitol:hover .overlay {
  bottom: 0;
  height: 100%;
}
.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
.lectie {
	
	
	color:black;
	background-color:#d3f8e0a1;
	padding-top:30px;
	margin-left:10%;
	border:2px solid black;
	border-radius:12px;
	
	padding:24px;
	margin-bottom:20px;
	text-decoration:none;
	padding-left:24px;
}
.lectie0 {
	font-size:34;
	font-weight:bold;
	
}
.lectie:hover {
	
	background-color:#2e34395e;
	cursor: pointer;
	text-decoration:none;
}
.lectie1 {
	font-size:20px;
	font-weight:normal;
	
	
}
.lectie2 {
	font-size:17px;
	font-weight:normal;
	float:right;
	position:relative;
	bottom:8px;
}

.buton1{
	border:0px;
	background-color:transparent;
	
}
.buton1:hover {
	cursor:auto;
}
.buton1:focus {
	outline-color: transparent;
	
}



  </style>
 </head>
 <body>
<div class="bara">
	<?php 
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Înregistrează-te</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Conectează-te</div></a>';
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
	echo "<div class='butoane'><a href='lectii.php' class='butonn'>Capitole</a></div>";
	
	?>	
	
  </div>
  </div>
   
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Conectează-te</h1><br>
				  <form action="include/login.inc.php" method="POST">
						<input type="text" name="uid" autocomplete="off" placeholder="Nume de utilizator"> 
						<input type="password" name="pwd" placeholder="Parola">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Conectare">
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					<h1>Creează un cont</h1><br>
				  <form action="include/signup.inc.php" autocomplete="off" method="POST">
						<input type="text" name="user_first" autocomplete="off" placeholder="Nume"> 
						<input type="text" name="user_last" autocomplete="off" placeholder="Prenume">
						<input type="text" name="user" autocomplete="off" placeholder="Nume de utilizator">
						<input type="text" name="user_email" autocomplete="off" placeholder="Email">
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="password" name="pwd2" placeholder="Confirmă parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Înregistrare">
				  </form>
					
				 
				</div>
			</div>
		  </div>
	
  <div class="content">
   <?php
$id_capitol=$_GET['id'];
$capitol=$_GET['subject'];
$sql="SELECT * FROM lectii WHERE id_capitol='$id_capitol'";
$result0=mysqli_query($conn,$sql);
if(mysqli_num_rows($result0)>0){
	while($row=mysqli_fetch_assoc($result0)){
		$lectie=$row['titlu'];
		$id=$row['id'];
		$continut=$row['lectie'];
		$descriere=substr($continut,0,strpos($continut,".")).".</p>";
		echo "
		<div class='lectie'>
		<div class='lectie0'>$lectie</div>
		<div class='lectie1'>
		$descriere
		
		</div>
		<a href='continutlectie.php?subject=$lectie & id_lectie=$id'class='link'><button class='lectie2'>Citește mai mult</button></a>
		</div>
		"; 
	}
}









 ?>
	<?php
	if(isset($_SESSION['u_status']))
	if($_SESSION['u_status']==1 or $_SESSION['u_status']==2)
	{
			echo "
				<a href='crearelectie.php?subject=$capitol &id=$id_capitol'>
				<div class='lectie'>
					<center><div class='lectie0'>
				
				
				Adaugă lecție
				
						
				
						</div></center>
					
					
					</div>
					</a>
				</div>";
	}
  ?>
 
  
  
  
  
  
  
  
  
 </body>
</html>