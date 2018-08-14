<?php
session_start();


 ?><html>
 <head>
 <title>Index</title>
 <link rel="shortcut icon" href="motanel.png" type="image/png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="styles/modal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  * {
	
	font-family:Helvetica;
  }
  body {
   background-image:url('1.jpg');
   background-repeat:no-repeat;
   background-size:100% 100%;
   margin:0px;
   padding:0px;
  }
  
  
  center {
	position:relative;
	top:16%;
	
  }
  .poza {
position:absolute;
	top:20%;
	left:37%
}
.logo {
	position:absolute;
	width:100%;
	height:100%;
	z-index:2;
	background-color:#10BBB3;
	animation:animatie 3s ease forwards;
}
@keyframes animatie{
	0% {
	opacity: 1;
	}

	100% {
		
		opacity: 0;
		z-index:-3;
	}
}
  .divs {
	background-color:white;
	opacity:0.8;
	width:34%;
	margin-bottom:32px;
	background: radial-gradient(white, #ffffff00);
	border-radius:5%;
	font-size:38px;
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
		background-color: lightgray;
		 background: radial-gradient(lightgray, #ffffff00);
		
	}
	




.lr {
	position:relative;
	float: right;
	width:auto;
}
.link {
font-size:18px;
}
  </style>
 </head>
 <body>
<div class="logo">
 <img src="logo.png" class="poza">
 
 </div>
 <?php 
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Înregistrează-te</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Loghează-te</div></a>';
	else
		echo '<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" style="border:0px;" type="submit" name="submit" value="Deloghează-te"> 
					</form> ';
  ?>
   
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Conectează-te</h1><br>
				  <form action="include/login.inc.php" autocomplete="off" method="POST">
						<input type="text" name="uid" placeholder="Nume de utilizator"> 
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Conectare">
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					<h1>Creează un cont</h1><br>
				  <form action="include/signup.inc.php" method="POST">
						<input type="text" name="first" autocomplete="off" placeholder="Nume"> 
						<input type="text" name="last" autocomplete="off" placeholder="Prenume">
						<input type="text" name="uid" autocomplete="off" placeholder="Nume de utilizator">
						<input type="text" name="email" autocomplete="off" placeholder="Email">
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="password" name="pwd2" placeholder="Confirmă parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Înregistrare">
				  </form>
					
				 
				</div>
			</div>
		  </div>
  <center>
  
   <div class="titlu divs">Ce vrei să faci azi?</div>
   <div class="divs"><a href="lectii.php">Să învăț!</a></div>
<?php 
if(isset($_SESSION['u_id']))
{
	echo "<div class='divs'><a href='salucrez.php'>Să lucrez!</a></div>";
}
else
{
	echo "<div class='divs' title='Poți accesa această pagina doar dacă ești conectat!'>Să lucrez!</div>";
}
   
   
   ?>
  </center>
  

  
  
 </body>
</html>