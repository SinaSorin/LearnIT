<?php
session_start();
include_once 'include/dbh.inc.php';?>
<html>
<head>
<style>
*{
	font-size:33px;	
	font-family:Helvetica;
	}
	body{
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
.tot {
	color:black;
	width:75%;
	margin-left:auto;
	margin-right:auto;
	box-sizing:border-box;
	padding-top:15px;
	padding:30px;
	
	margin-top:30px;
}
.robot {
	width:410px;
	float:left;
	border:2px solid;
}
.robot:hover {
	border:2px solid;
	
}
.pagina1 {
	float:right;
	border:3px solid #10BBB3;
	border-radius:15px;
	width:530px;

	padding:30px;
	text-align:center;
	padding-top:60px;
	padding-bottom:60px;
	font-size:40px;
	margin-bottom:20px;
}
.pagina2 {
	float:right;
	border:3px solid #10BBB3;
	border-radius:15px;
	width:530px;
	padding:30px;
	text-align:center;
	padding-top:80px;
	padding-bottom:80px;
	font-size:40px;
	margin-bottom:20px;
}
.doua{
	margin-top:400px;
	margin-left:370px;
	font-size:33px;
}
.container {
	position:relative;
	display: block;
	width:413px;
	height:413px;
	float:left;
	border-box:box-sizing; 
}

.robot {
	position:relative;
	width:410px;
	float:left;
	border:2px solid;
	display: block;
	border-box:box-sizing; 
}
.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #10BBB3;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
progress {
	margin-left:-10%;
}
</style>
</head>
<body>
<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Log out"> 
					</form>
	   <div class="profil">
  
	<a href="index.php">
	
	<img src='logo.png' class='poza'></a>

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
	<div class='container'>
	<?php
	$id_user=$_SESSION['u_id'];
	$sql="SELECT * FROM rank WHERE id_user=$id_user";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$rank=$row['nivel'];
			$xp=$row['xp'];
		}
	}
	$sql="SELECT * FROM robot WHERE rank=$rank";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$src=$row['robot'];
		}
	}
	else 
	{
		$sql="SELECT * FROM robot WHERE rank=4";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$src=$row['robot'];
		}
	}
	}
	echo "
	<img src='$src' class='robot'>
	<a href='robot.php'>
	<div class='overlay'>
    <div class='text'>Robotii mei</div>
  </div></a>
  "
	?>
	</div>
	<a href="numar2.php"><div class="pagina1">
	Provocarea zilei
	</div></a>

	<a href="testecod.php"<div class="pagina2">
	Probleme
	</div></a>
	<?php
		$total=$rank*100;
		echo "<div class='doua'>
		<div class='rank'>Rank: $rank</div>";
		echo "<div class='xp'>Xp: $xp/$total</div>
		<progress value='$xp' min='0' max='$total'></progress>
		</div>";
	?>
</div>

</body>
</html>