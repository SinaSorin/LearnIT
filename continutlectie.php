<?php 
session_start();
include_once 'include/dbh.inc.php';
?>
<html>
<head>
<title>Lectie</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="styles/bara.css">
   <link rel="stylesheet" href="styles/modal.css">
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

</style>
</head>
<body>
<div class="bara">
	<?php
	$id_lectie=$_GET['id_lectie'];
	$sql="SELECT * FROM lectii WHERE id='$id_lectie'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$capitol=$row['capitol'];
		}
	}
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Înregistrează-te</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Conectează-te</div></a>';
	else
		echo '<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconectează-te"> 
					</form> ';
	echo "<div class='butoane'>";
	echo "<a href='lectii.php' class='butonn'>Capitole</a>";
	echo "<a href='lectiecapitol.php?subject=$capitol' class='butonn'>$capitol</a>";
	echo "</div>";
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
					<h1>Conectează-te</h1><br>
				  <form action="include/login.inc.php" autocomplete="off" method="POST">
						<input type="text" name="uid" placeholder="Nume de utilizator"> 
						<input type="password" name="pwd" placeholder="parolă">
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
						<input type="text" name="user_first" placeholder="Nume"> 
						<input type="text" name="user_last" placeholder="Prenume">
						<input type="text" name="user" placeholder="Nume de utilizator">
						<input type="text" name="user_email" placeholder="Email">
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="password" name="pwd2" placeholder="Confirma parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Înregistrare">
				  </form>
					
				 
				</div>
			</div>
		  </div>
<div class="tot">
<?php


$titlu=$_GET['subject'];
$id_lectie=$_GET['id_lectie'];
$sql="SELECT * FROM lectii WHERE titlu='$titlu'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$lectie=$row['lectie'];
		$user=$row['id_user'];
		if(isset($_SESSION['u_id']) and $_SESSION['u_id']==$user)
		{
			echo "<a href='editarelectie.php?subject=$id_lectie'><span class='glyphicon glyphicon-pencil' style='float:right;'></span></a>";
		}
		
		echo "<div class='titlu'>$titlu</div>
		<div class='lectie'>$lectie</div>"; 
		
		if(isset($_SESSION['u_id']) and $_SESSION['u_id']==$user)
		{
			
			echo  "<a href='grila1.php?subject=$id_lectie'>Creează un exercitiu</a>";
			
		}
		
		
	
	}
}
else
	echo "Nu există lecții";


if(!isset($_SESSION['u_id']))
	echo "Pentru a rezolva exerciții trebuie să te conectezi.";
else
{
	echo "<br/><br/>Rezolvă exerciții:<br/>";
	$sql="SELECT * FROM test WHERE id_lectie=$id_lectie";
	$i=0;
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$i++;
			$subject=$row['id'];
			echo "<a href='exercitiu.php?subject=$subject'>Test $i </a><br/>";
		}
	}
	else
	{
		echo 'Nu există exerciții.';
	}
	
	
}







 ?>
 </div>
</body>
</html>