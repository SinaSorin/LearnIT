<?php 
session_start();
include_once 'include/dbh.inc.php';
if(isset($_SESSION['u_id']))
	{
	$user_status=$_SESSION['u_status'];
	$id_user=$_SESSION['u_id'];
	if($user_status!=1)
			header("Location: index.php");
	}

?>

<html>
<head>
<title>Profil</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
 <link rel="stylesheet" href="styles/bara.css">
<style>
body {
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
	font-size:3vh;
  }
  
.s1 {
	width:100%;
	height:95vh;
	display:flex;
}
.s2 {
	width:25%; 
	float:left;
	background-color:#009999;
	height:100vh;
}
.s3 {
	
	width:75%; 
	float:left;
	height:100vh;
	display:flex;
}
.s4 {
	width:50%; 
	height:100vh;
	padding:50px;
	padding-top:20px;
	box-sizing:border-box;
}
.s5 {
	
	width:50%; 
	height:100vh;
	padding:50px;
	padding-top:20px;
	box-sizing:border-box;
}
.upgrade {
	font-size:2.4vh;
	background-color:#10BBB3;
	border:1px solid black;
	color:white;
	float:right;
	padding-bottom:0.1vh;
}
.demote {
	font-size:2.4vh;
	background-color:#bb1010;
	border:1px solid black;
	color:white;
	float:right;
	padding-bottom:0.1vh;
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
    font-size: 2vw;
    font-weight: 700;
 padding:1vh;
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
    padding: 1vw;
    width: 9vw;
    height: 5vw;
    margin: 2vw;
    border: none;
    font-weight: 700;
    background-color: #f3f3f3;
    color: #111;
    font-size: 2vw;
    cursor: pointer;
}
.profileimg:hover {
 background-color: #ccc;
}
.profil12 {
	width: 20vw;
    border-radius: 50%;
    position: relative;
    top: 12vh;
    left: 2.5vw;
}
.form {
	position:relative;
	top:16vh;
}
.helper {
	color:#bb1010;
	font-size:4.5vh;
}
.incepator {
	color:#10BBB3;
	font-size:4.5vh;
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
					<input class="lr divs link" type="submit" name="submit" value="Deconectează-te"> 
		
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
class="profil12">
 <center>
 <form class="form" action='upload.php' method='POST' enctype='multipart/form-data' >
    <input type="file" name="file" id="file" class="inputfile" />
     <label for="file">Schimbă-ți poza de profil</label>
    <button type='submit' name='submit' class="profileimg">Încarcă</button> <!--personalizarea profilului -->
    </form>
	</center>
</section>
<section class="s3">

<section class="s4">
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

<section class="s5">
<p class="incepator"><strong>Începatori</strong></p>
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

</section>
</body>
</html>