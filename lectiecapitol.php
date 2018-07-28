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
 .divs {
	background-color:#10BBB3;
	border:0px;
	color:white;
	opacity:0.8;
	margin-bottom:32px;
	padding:12px;
  }
	.titlu {
		font-size:52px;
		width:40%;
	}
	a {
		text-decoration:none;
		color:black;
	}
	.divs:hover {
		background-color:#208b86;
	}
	@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #10BBB3;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #208b86; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #208b86;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 



/****** REGISTER MODAL ******/
.registermodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.registermodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.registermodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.registermodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.registermodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.registermodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.registermodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.registermodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.registermodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 



.lr {
	position:relative;
	float: right;
	width:auto;
}
.link {
font-size:18px;
}
.bara {
	position:fixed;
	background-color:#10BBB3;
	width:100%;
	height:50px;
	z-index:2;
}
.row {
	
	width:100%;
	height:500px;
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
a:hover {
 
 text-decoration:none;
}
.profil {
	display:flex;
	
}
.poza {
	width:50px;
	height:50px;
	border-radius:50%;
	
}
.cont {
	display:flex;
	color:white;
	font-size:18px;
	margin-top:10px;
}
.butoane {
	position:absolute;
	left: 16%;
    top: 14px;
}
.butonn {
	color:white;
	
}
.butonn:hover {
	
	color:black;
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
					<input class="lr divs link" type="submit" name="submit" value="Deconecteaza-te"> 
					</form> ';
		echo "<div class='butoane'><a href='lectii.php' class='butonn'>Capitole</a></div>";
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
	
	
	?>	
	
  </div>
  </div>
   
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Conecteaza-te</h1><br>
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
					<h1>Creeaza un cont</h1><br>
				  <form action="include/signup.inc.php" autocomplete="off" method="POST">
						<input type="text" name="user_first" autocomplete="off" placeholder="Nume"> 
						<input type="text" name="user_last" autocomplete="off" placeholder="Prenume">
						<input type="text" name="user" autocomplete="off" placeholder="Nume de utilizator">
						<input type="text" name="user_email" autocomplete="off" placeholder="Email">
						<input type="password" name="pwd" placeholder="Parola">
						<input type="password" name="pwd2" placeholder="Confirma parola">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Inregistrare">
				  </form>
					
				 
				</div>
			</div>
		  </div>
	
  <div class="content">
   <?php

$capitol=$_GET['subject'];
$sql="SELECT * FROM lectii WHERE capitol='$capitol'";
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
		<a href='continutlectie.php?subject=$lectie & id_lectie=$id'class='link'><button class='lectie2'>Citeste mai mult</button></a>
		</div>
		"; 
	}
}









 ?>
	<?php
	if(isset($_SESSION['u_status']))
	if($_SESSION['u_status']==1 or $_SESSION['u_status']==2)
	echo "
	<a href='crearelectie.php'>
	<div class='lectie'>
		<center><div class='lectie0'>
	
	
	Adauga lectie
	
			
	
			</div></center>
		
		
		</div>
	</a>
  </div>"
  ?>
 
  
  
  
  
  
  
  
  
 </body>
</html>