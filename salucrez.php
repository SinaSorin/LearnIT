<?php
session_start();
include_once 'include/dbh.inc.php';?>
<html>
<head>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 

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



/****** REGISTER MODAL ******/
.registermodal-container {
  padding: 30px;
  width: 716px;
  
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
	display: flex;
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
.pagina1:hover {
	text-decoration:none;
}
.pagina2:hover {
	text-decoration:none;
}
.doua{
	position:relative;
	margin-left:35%;
	font-size:33px;
}
.container {
	position:relative;
	display: block;
	width:410px;
	
	
	border-box:box-sizing; 
}

.robot {
	position:relative;
	width:410px;
	float:left;
	border:2px solid;
	display: block;
	box-sizing:border-box;
}
.overlay {
  position: absolute;
  bottom: 100%;
  left: 15px;
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
.stanga {
	float:left;
	
}
.dreapta {
	
	float:right;
	
}
.modal {
	margin-top:30px;
	
}
.container1 {
	display:block;
	margin:10px;
	width:50%;
}
.container2 {
	display:block;
	margin:10px;
	width:50%;
}
@media screen and (max-width:1250px){
	.tot {
		display:block;
		margin-left:30%;
	}
}

</style>
</head>
<body>
<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconecteaza-te"> 
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
		echo "<a href='toti.php' style='text-decoration:none;'><div class='cont'>$user</div></a>";
	else
		echo "<a href='cont.php' style='text-decoration:none;'><div class='cont'>$user</div></a>";
	}
	
	
	?>	
	
  </div>
  </div>
<div class="tot">
	<div class='container1'>
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
	<?php
		$total=$rank*100;
		echo "<div class='doua'>
		<div class='rank'>Rank: $rank</div>";
		echo "<div class='xp'>Xp: $xp/$total</div>
		<progress value='$xp' min='0' max='$total'></progress>
		</div>";
	?>
	</div>
	<div class="container2">
	<a href="numar2.php" style="text-decoration:none;">
	<div class="pagina1">
	Provocarea zilei
	</div>
	</a>
	
	<a href="#"  data-toggle="modal" data-target="#register-modal" style="text-decoration:none;">
	<div class="pagina2">
	Probleme
	</div>
	</a>
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					
					<div class="stanga">
					
					<a href="testecod.php" style="color:black;">Probleme date iesire</a>
					
					</div>
					<div class="dreapta">
					
					<a href="testedrag.php" style="color:black;">Exercitii drag&drop </a>
					
				 </div>
				 
				 
				</div>
			</div>
		  </div>
	</div>
	
</div>

</body>
</html>