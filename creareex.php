<?php
	session_start();
	include_once 'include/dbh.inc.php';
	$i=0;
	$j=0
	
	?>
<html>
<head>
<title>Creare exercitiu</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" /></head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
  <style>
* {
	
	font-family:Helvetica;
  }
body{
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
}
.text {
	width:80%;
	margin-left:auto;
	margin-right:auto;
	margin-top:40px;
}
.titlu {
	margin-bottom:20px;
	font-size:25px;
}
.titlu2 {
	margin-bottom:20px;
	font-size:25px;
}
.capitol {
	margin-left:40px;
	display:inline;
}
.submit {
	margin-top:20px;
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
.btn {
	background-color:#10BBB3;
	width:fit-content;
	display:inline;
	padding:10px;
	color:white;
	border:1px solid black;
	font-size:20px;
}
.btn:hover{
	background-color:#208b86;
	cursor:pointer;
	
}
.date {
	position:relative;
	margin-right:10px;
	margin-top:20px;
	font-size: 18px;
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
					


<form action="creareex2.php" method="POST" id="form">
<div class="text">
<input class="titlu" type="text" name="enunt" size="80" placeholder="Enunt" required >


  <textarea id="froala-editor" name="content"></textarea>
  <br>
  
 <input class="titlu submit" type="submit" name="submit">
  </div>

</form>
  
<script>
  $(function() {
  $('textarea#froala-editor').froalaEditor()
});</script>

</body>
</html>