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
	position:relative;
	background-color:#10BBB3;
	width:100%;
	height:50px;
	z-index:2;
	top:-2px;
}
.row {
	
	width:100%;
	height:500px;
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
.profil {
	display:flex;
	margin-top:-14px;
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
    font-size: 78;
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
.butoane {
	position:absolute;
	left:15%;
	top:14px;
}
.butonn {
	color:white;
	margin-left:10px;
	font-size:14;
}
.butonn:hover {
	text-decoration:none;
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

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form action="include/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="username"> 
						<input type="password" name="pwd" placeholder="password">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Login">
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					<h1>Sign up</h1><br>
				  <form action="include/signup.inc.php" method="POST">
						<input type="text" name="user_first" placeholder="First name"> 
						<input type="text" name="user_last" placeholder="Last name">
						<input type="text" name="user" placeholder="Username">
						<input type="text" name="user_email" placeholder="Email">
						<input type="password" name="pwd" placeholder="Password">
						<input type="password" name="pwd2" placeholder="Confirm password">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Register">
				  </form>
					
				 
				</div>
			</div>
		  </div>
	<div class="tot">
	<div>
	<img src="ruleta.png" class="ruleta">
 </div>
	
	<?php
		echo "<div class='numar'>$nr</div>";
		echo "<div class='rezultat'><p class='loto'>$nr_loto</p>";
		echo $text.'</div>';

	?>
	</div>
	
 
 <body>
 </html>
