<?php
session_start();
include_once 'include/dbh.inc.php';
 ?>
<html>
 <head>
 <title>Capitole</title>
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
	position:relative;
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
	border-left:2px solid lightgray;
	border-right:2px solid lightgray;
}
.capitol1 {
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
.capitol2 {
	position:relative;
	padding-top:80px;
	width:200px;
	height:200px;
	margin-top:60px;
	margin-left:60px;
	display:inline-block;
	background-color:#0c615e54;
	font-size:24px;
	font-family:Verdana;
	text-align:center;
	border:2px solid black;
	border-radius:5%;
	transition: .2s ease;
	color:white;
	
}
.capitol2:hover {
	cursor:pointer;
	
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
.capitol1:hover {
	color:#f5fff2;
	transition: .2s ease;
}
.capitol1:hover .overlay {
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
.overlay1{
	position: absolute;
	background-color: #0c615e54;
	overflow: hidden;
	width: 100%;
	height:100%;
	left: 0px;
	right: 0px;
	top:0px;
	bottom:0px;
}
.inp {
	font-size:24px;
	
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
  </style>
 </head>
 <body>
 
 
<div class="bara">
	<?php 
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Register</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Login</div></a>';
	else
		echo '<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Log out"> 
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
	
  <div class="content">
    <?php
	$sql="SELECT * FROM capitole";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)) {
			$titlu=$row['titlu'];
			echo "<div class='capitol1'>$titlu
			<a href='lectiecapitol.php?subject=$titlu'><div class='overlay'>
    <div class='text'>Vezi lectii</div></div></a>
			
			</div>";	
		}
	}
	else
		echo 'Nu sunt capitole';
	?>
	<?php 
	if(isset($_SESSION['u_status']))
	if($_SESSION['u_status']==1 or $_SESSION['u_status']==2)
	echo"<button type='button' class='buton1' data-toggle='modal' data-target='#myModal'>
	<div class='capitol2'>
	 <!-- Trigger the modal with a button -->
 Adauga capitol
	
			
			</div>
			</button>
  </div>"
 ?>
  
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adaugare capitol</h4>
        </div>
		<div class="modal-body">
		<form action="include/capitol.inc.php" method="POST">
 
          
				<input type="text" name="capitol" placeholder="capitol" class="inp"> 
						</div>
        <div class="modal-footer">
						<input type="submit" name="submit" class="btn btn-default" value=" trimite">
        </div>
		 </form>
		 
      </div>
      
    </div>
  </div>
  

  
  
  
  
  
  
  
  
  
 </body>
</html>