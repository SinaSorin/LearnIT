<?php
session_start();
include_once 'include/dbh.inc.php';?>
<html>
<head>
<style>
*{
	font-size:22px;	
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
	width:70%;
	margin-left:auto;
	margin-right:auto;
	box-sizing:border-box;
	padding-top:15px;
	padding:30px;
	background-color:#ffffffb5;
	margin-top:30px;
}
.cod {
	border:2px solid #10BBB3;
	border-radius:20px;
	padding:30px;
	
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
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Log out"> 
					</form>
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
	echo "<a href='testecod.php' class='butonn'>Probleme</a>";
	echo "</div>";
	
	?>	
	
  </div>
  </div>
<div class="tot">
<?php
$id=$_GET['subject'];
$id_user=$_SESSION['u_id'];
$sql="SELECT * FROM  test_cod WHERE id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$enunt=$row['enunt'];
		$cod=$row['cod'];
		$explicatie=$row['explicatie'];
		echo $enunt."<br><br><div class='cod'>".$cod."</div><br>";
	}
}
$sql2="SELECT * FROM date_iesire WHERE id_test='$id'";
$result2=mysqli_query($conn,$sql2);
$nr=mysqli_num_rows($result2);
if(isset($_POST['submit']))
{
	$sql="INSERT INTO user_cod(id_user,id_test) VALUES('$id_user','$id')";
	$result=mysqli_query($conn,$sql);
	if($nr>0)
	{
		$i=0;
		$corect=0;
		echo "<h1>Rezolvare:";
		while($row2=mysqli_fetch_assoc($result2))
		{
			$i++;
			echo $row2["data"]." ";
			$data=$_POST["data$i"];
			if($data==$row2['data'])
				$corect++;
		}
	}
	echo "</h1><strong>Explicatie</strong>: $explicatie<br>";
	echo "$corect raspunsuri corecte";
	if($corect==$nr)
	{
		$xp=10;
		$sql4="SELECT * FROM rank WHERE id_user=$id_user";
		$result4=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result4)>0)
		{
			while($row=mysqli_fetch_assoc($result4))
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
else
{
	$sql="SELECT * FROM user_cod WHERE id_user='$id_user' AND id_test='$id'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "<h1>Rezolvare:";
		$sql2="SELECT * FROM date_iesire WHERE id_test='$id'";
		$result2=mysqli_query($conn,$sql2);
		$nr=mysqli_num_rows($result2);
		if($nr>0)
			while($row2=mysqli_fetch_assoc($result2))
				echo $row2["data"]." ";
		echo "</h1><strong>Explicatie</strong>: $explicatie <br>";
		echo 'Ai fct deja acest test';
	}
	else 
	{
		echo "Introdu datele de iesire:<br>";
		echo "<form method='POST'>";
		for($i=1;$i<=$nr;$i++)
			echo "<input type='text' name='data$i' required>";
		echo "<br><input type='submit' name='submit' value='submit'></form>";
	}
	

}





?>
</div>
</body>
</html>