<?php 
session_start();
include_once 'include/dbh.inc.php';
$id_user=$_SESSION['u_id'];
?>

<html>
<head>
<style>
body {
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
	font-size:22px;
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
	height:6.5%;
	z-index:2;
}
.row {
	
	width:100%;
	height:500px;
}
.profil{
	position:relative;
	
	background-color:#10BBB3;
	width:20%;
	height:80%;
	
}
.s1 {
	width:100%;
	height:95%;
}
.s2 {
	width:25%;
	float:left;
	background-color:#009999;
	height:100%;
}
.s3 {
	width:75%;
	float:left;
	height:100%;
}
.upgrade {
	font-size:17px;
	background-color:#10BBB3;
	border:1px solid black;
	color:white;
	
}
.demote {
	font-size:17px;
	background-color:#bb1010;
	border:1px solid black;
	color:white;
	
}
form {
display:inline;
}
.inputfile {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
 padding:5px;
    color: black;
    background-color:white;
    display: inline-block;
 cursor: pointer;
}
.inputfile + label:hover {
    color: white;
    background-color: black;
}

.profileimg{
 padding: 4px;
 width: 100px;
 height: 50px;
 margin: 20px;
 border:none;
 font-weight: 700;
 background-color: #f3f3f3;
 font-family":"arial";
 font-size: 14px;
 color: #111;
 cursor: pointer;
}
.profileimg:hover {
 background-color: #ccc;
}
.profil {
	width:250px;
	height:250px;
	border-radius:50%;
	position:relative;
	top:120px;
	left:60px;
}
.form {
	position:relative;
	top:150px;
	left:20px;
}
</style>
</head>
<body>

<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Log out"> 
					</form>
  </div>

<section class="s1" >
<section class="s2">
<?php
$sql="SELECT * FROM profileimg WHERE userid=$id_user";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$src=$row['src'];
	}
}
?>
<img src=<?php 
		echo $src ;
?> 
class="profil">
 <form class="form" action='upload.php' method='POST' enctype='multipart/form-data' >
    <input type="file" name="file" id="file" class="inputfile" />
     <label for="file">Schimba-ti poza de profil</label>
    <button type='submit' name='submit' class="profileimg">UPLOAD</button> <!--personalizarea profilului -->
    </form>
</section>
<section class="s3">
<form method="POST">
<input type="submit" name="Ajutoare" value="Ajutoare">
</form>
<form method="POST">
<input type="submit" name="Incepatori" value="Incepatori">
</form>
<form method="POST">
<input type="submit" name="Toti" value="Toti">
</form>
<?php
if(isset($_POST['Ajutoare']))
{
	$sql1="SELECT * FROM user WHERE user_status=2";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>0)
	{
		echo "<ol>";
		while($row=mysqli_fetch_assoc($result1))
		{
			$id=$row['user_id'];
			$user=$row['user_uid'];
			echo "<li>".$user;
			echo "<form method='POST' action='include\demote.inc.php?subject=$id'>
					  <input type='submit' class='demote' value='Demote' name='submit$id'>
					  </form>";
			echo "</li>";
		}
	}
}
else
	if(isset($_POST['Incepatori']))
	{
		$sql2="SELECT * FROM user WHERE user_status=3";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0)
		{
			echo "<ol>";
			
			while($row=mysqli_fetch_assoc($result2))
			{
				$id=$row['user_id'];
				$user=$row['user_uid'];
				echo "<li>".$user;
				echo "<form method='POST' action='include\upgrade.inc.php?subject=$id'>
					  <input type='submit' class='upgrade' value='Upgrade' name='submit$id'>
					  </form>";
				echo "</li>";
			}
		}
	}
	else
	{
		$sql="SELECT * FROM user";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			echo "<ol>";
			while($row=mysqli_fetch_assoc($result))
			{
				$id=$row['user_id'];
				$user=$row['user_uid'];
				$status=$row['user_status'];
				if($status!=1)
				{
					echo "<li>".$user;
					if($status==3)
					echo "<form method='POST' action='include\upgrade.inc.php?subject=$id'>
					  <input type='submit' class='upgrade' value='Upgrade' name='submit$id'>
					  </form>";
					  else
						  echo "<form method='POST' action='include\demote.inc.php?subject=$id'>
					  <input type='submit' class='demote' value='Demote' name='submit$id'>
					  </form>";
						  
				echo "</li>";
				}
				
			}
			echo "</ol>";
				
		}
	}




?>
</section>
</section>
</body>
</html>