<?php
session_start();
include_once 'include/dbh.inc.php';
 ?>
<html>
	<head>
	<title>Creare Test</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="styles/bara.css">
   <link rel="stylesheet" href="styles/modal.css">
  <style>
  body {
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
  }
  
  
	.titlu {
		font-size:52px;
		width:40%;
	}
	

.tot {
	color:black;
	width:70%;
	height:fit-content;
	margin-left:auto;
	margin-right:auto;
	padding:100px;
	padding-top:70px;
	background-color:#ffffffb5;
	margin-top:100px;
	font-size:23px;
}

.btn {
	background-color:#10BBB3;
	width:fit-content;
	display:inline;
	padding:10px;
	color:white;
	border:1px solid black;
	font-size:20px;
	margin-left:10px;
}
.btn:hover{
	background-color:#208b86;
	cursor:pointer;
	
}
  </style>
	</head>
	<body>
	
	<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconecteaza-te"> 
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
  
   
 
	
<div class="tot">

<?php 
$id_lectie=$_GET['subject'];

?>

<button type="button" id="btn1" class="btn">+</button>
<button type="button"  id="btn2" class="btn">-</button>




<script src="scripts/grila.js"></script>
<form method="POST" action="include/grila.inc.php?subject=<?php echo $id_lectie; ?>"><span id="span"></span>

<input id="imp" name="imp" type="text" style="display:none;">
 <input type="submit" name="submit">
 </form>
<br>
<br>


</div>

	</body>
</html>
