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
	position:fixed;
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
	display:flex;
}
.s2 {
	width:25%;
	background-color:#009999;
	height:105%;

}
.s3 {
	width:37%;
	height:100%;
	padding:50px;
	box-sizing:border-box;
	
}
.s4 {
	width:38%;
	height:100%;
	padding:50px;
	box-sizing:border-box;
}
.upgrade {
	font-size:17px;
	background-color:#10BBB3;
	border:1px solid black;
	color:white;
	float:right;
	
}
.demote {
	font-size:17px;
	background-color:#bb1010;
	border:1px solid black;
	color:white;
	float:right;
	
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
.helper {
	color:#bb1010;
	font-size:30px;
}
.incepator {
	color:#10BBB3;
	font-size:30px;
}
.profil2 {
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
.poza1 {
	width:20px;
	position:absolute;
	
}
.nume {
	margin-left:20px;
	
}
</style>
</head>
<body>

<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconecteaza-te"> 
				</form>
	<div class="profil2">
  
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
<img src="<?php 
		echo $src ;
?>"
class="profil">
 <form class="form" action='upload.php' method='POST' enctype='multipart/form-data' >
    <input type="file" name="file" id="file" class="inputfile" />
     <label for="file">Schimba-ti poza de profil</label>
    <button type='submit' name='submit' class="profileimg">UPLOAD</button> <!--personalizarea profilului -->
    </form>
</section>
<section class="s3">
<p class="helper"><strong> Ajutoare</strong></p>
<?php
	$sql1="SELECT * FROM user WHERE user_status=2";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>0)
	{
		echo "<ol>";
		while($row=mysqli_fetch_assoc($result1))
		{
			$id=$row['user_id'];
			$user=$row['user_uid'];
			$sql10="SELECT * FROM note WHERE id_user=$id";
					$result10=mysqli_query($conn,$sql10);
					$num=mysqli_num_rows($result10);
					if($num>0)
					{
						$sum=0;
						while($row=mysqli_fetch_assoc($result10))
						{
							$sum+=$row['nota'];
						}
						$medie=$sum/$num;
						$medie=round($medie,2);
					}
					else
						$medie=0;
					$sql11="SELECT * FROM profileimg WHERE userid='$id'";
				$result11=mysqli_query($conn,$sql11);
				if(mysqli_num_rows($result11)>0)
				{
					while($row=mysqli_fetch_assoc($result11))
					{
						$src=$row['src'];
					}
					
				}
					
			echo "<li><img class='poza1' src='$src'><div class='nume'>".$user." ".$medie." din $num teste";
			echo "<form method='POST' action='include\demote.inc.php?subject=$id'>
					  <input type='submit' class='demote' value='Retrogradare' name='submit$id'>
					  </form>";
			echo "</div></li>";
		}
		echo '</ol>';
	}
	else 
		echo "Momenta nu exita ajutoare.";
	

		





?>
</section>
<section class="s4">
<p class="incepator"><strong>Incepatori</strong></p>
<?php
$sql2="SELECT * FROM user WHERE user_status=3";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0)
		{
			echo "<ol>";
			
			while($row=mysqli_fetch_assoc($result2))
			{
				$id=$row['user_id'];
				$user=$row['user_uid'];
				$sql10="SELECT * FROM note WHERE id_user=$id";
					$result10=mysqli_query($conn,$sql10);
					$num=mysqli_num_rows($result10);
					if($num>0)
					{
						$sum=0;
						while($row=mysqli_fetch_assoc($result10))
						{
							$sum+=$row['nota'];
						}
						$medie=$sum/$num;
						$medie=round($medie,2);
					}
					else
						$medie=0;
				$sql11="SELECT * FROM profileimg WHERE userid='$id'";
				$result11=mysqli_query($conn,$sql11);
				if(mysqli_num_rows($result11)>0)
				{
					while($row=mysqli_fetch_assoc($result11))
					{
						$src=$row['src'];
					}
					
				}
				
				echo "<li><img class='poza1' src='$src'><div class='nume'>".$user." ".$medie." din $num teste";
				echo "<form method='POST' action='include\upgrade.inc.php?subject=$id'>
					  <input type='submit' class='upgrade' value='Promovare' name='submit$id'>
					  </form>";
				echo "</div></li>";
			}
			echo "</ol>";
		}
		else
			echo "Momentan nu exista incepatori.";




 ?>
</section>
</section>
</body>
</html>