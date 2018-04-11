<?php 
session_start();
?>
<html>
<head>
<link rel="shortcut icon" href="motanel.png" type="image/png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  body {
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
  }
.lectie {
	font-size:24px;
}
.titlu {
	font-size:60px;
	text-align:center;
	
}
.tot {
	color:black;
	width:70%;
	margin-left:auto;
	margin-right:auto;
	padding:12px;
	padding-top:15px;
	background-color:#ffffffb5;
	margin-top:100px;
}
.bara {
	position:relative;
	background-color:#10BBB3;
	width:100%;
	height:50px;
	z-index:2;
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

.link {
font-size:18px;
}

.lr {
	position:relative;
	float: right;
	width:auto;
}
.divs {
	background-color:#10BBB3;
	border:0px;
	color:white;
	opacity:0.8;
	margin-bottom:32px;
	padding:12px;
  }
.row {
	
	width:100%;
	height:500px;
}

	a {
		text-decoration:none;
		color:black;
	}
	.divs:hover {
		background-color:#208b86;
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
<?php

include_once 'include/dbh.inc.php';
$titlu=$_GET['subject'];
$id_lectie=$_GET['id_lectie'];
$sql="SELECT * FROM lectii WHERE titlu='$titlu'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$lectie=$row['lectie'];
		echo "<div class='titlu'>$titlu</div>
		<div class='lectie'>$lectie</div>"; 
		$user=$row['id_user'];
		if(isset($_SESSION['u_id']) and $_SESSION['u_id']==$user)
		{
			
			echo  "<a href='grila.php?subject=$id_lectie'>Creeaza un ex</a>";
		}
		
		
	
	}
}
else
	echo "Nu exista lectii";


if(!isset($_SESSION['u_id']))
	echo "Pentru a rezolva exercitii trebuie sa te loghezi.";
else
{
	echo "<br/><br/>Rezolva exercitii:<br/>";
	$sql="SELECT * FROM test WHERE id_lectie=$id_lectie";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		
		$nr_teste=0;
		$ids= array();
		while($row=mysqli_fetch_assoc($result))
		{
			$nr_teste++;
			$ids[$nr_teste]=$row['id'];
		}
		for($i=1;$i<=$nr_teste;$i++)
			echo "<a href='exercitiu.php?subject=$ids[$i]'>Test".$i."</a><br/>";
	}
	else
	{
		echo 'Nu exista exercitii.';
	}
	
	
}







 ?>
 </div>
</body>
</html>