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
 <link rel="stylesheet" href="styles/bara.css">
 <link rel="stylesheet" href="styles/modal.css">
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

	.titlu {
		font-size:52px;
		width:40%;
	}


.content {
	position:relative;
	width:840px;
	top:60px;
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
	display:inline-flex;
	background-color:#f5fff2;
	
	border:2px solid black;
	border-radius:5%;
	transition: .2s ease;
}
.nume{
	font-size:24px;
	font-family:Verdana;
	text-align:center;
	width:100%;
	
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
.buton2{
	border:0px;
	background-color:transparent;
	
}
.buton2:hover {
	background-color:#9bbbb2;
}

.buton2:focus {
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


.cap {
	position:relative;
	font-size:40px;
	font-weight:bold;
	text-align:center;
	margin-top:20px;
}
.x {
    position: absolute;
    float: right;
    color: red;
    font-size: 3vh;
    right: 1vw;
    top: 1vh;
	z-index:5;
	cursor:pointer;
}
.x:hover {
	text-decoration: none;
	color: red;
	
}

  </style>
 </head>
 <body>
 
 
<div class="bara">
	<?php 
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Înregistrează-te</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Conectează-te</div></a>';
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
	
	
	?>	
	
  </div>
	</div>
  
   
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Conecteaza-te</h1><br>
				  <form action="include/login.inc.php" method="POST">
						<input type="text" name="uid" autocomplete="off" placeholder="Nume de utilizator"> 
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Conectare">
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					<h1>Creeeaza un cont</h1><br>
				  <form action="include/signup.inc.php" method="POST">
						<input type="text" name="user_first" autocomplete="off" placeholder="Nume"> 
						<input type="text" name="user_last" autocomplete="off" placeholder="Prenume">
						<input type="text" name="user" autocomplete="off" placeholder="Nume de utilizator">
						<input type="text" name="user_email" autocomplete="off" placeholder="Email">
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="password" name="pwd2" placeholder="Confirmă parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Înregistrare">
				  </form>
					
				 
				</div>
			</div>
		  </div>
		  
	<div class="cap">Capitole</div>
	
  <div class="content">
    <?php
	$sql="SELECT * FROM capitole";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_assoc($result)) {
			$titlu=$row['titlu'];
			$id=$row['id'];
			echo "<div class='capitol1'>";
			if($user_status==1)
			echo "<button type='button' class='buton2 x' data-toggle='modal' data-target='#myModal$id'>
			X</button>";
			echo "<p class='nume'>$titlu</p>
			<a href='lectiecapitol.php?subject=$titlu & id=$id'>
			<div class='overlay'>
			<div class='text'>Vezi lecții</div>
			</div>
			</a>
			</div>
			<div class='modal fade' id='myModal$id' role='dialog'>
    <div class='modal-dialog'>
    
     
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Stergere capitol</h4>
        </div>
		<div class='modal-body'>
		
			Esti sigur ca vrei sa stergi capitolul?
          
						</div>
        <div class='modal-footer'>
						<a class='btn btn-default' href='include/dropcapitol.inc.php?id=$id'>Da</a>
        </div>
		
		 
      </div>
      
    </div>
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
	 
 Adaugă capitol
	
			
			</div>
			</button>
  </div>"
 ?>
  
 

  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adăugare capitol</h4>
        </div>
		<div class="modal-body">
		<form action="include/capitol.inc.php" method="POST">
 
          
				<input type="text" name="capitol" required placeholder="capitol" class="inp"> 
						</div>
        <div class="modal-footer">
						<input type="submit" name="submit" class="btn btn-default" value=" trimite">
        </div>
		 </form>
		 
      </div>
      
    </div>
  </div>
  
  
	
  
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Stergere capitol</h4>
        </div>
		<div class="modal-body">
		
			Esti sigur ca vrei sa stergi capitolul?
          
						</div>
        <div class="modal-footer">
						<a class="btn btn-default">Da</a>
        </div>
		
		 
      </div>
      
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
 </body>
</html>