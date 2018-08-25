<?php
	session_start();
	include_once 'include/dbh.inc.php';
	$i=0;
	if(isset($_SESSION['u_id']))
	{
	$id_user=$_SESSION['u_id'];
	$user_status=$_SESSION['u_status'];
	if($user_status==3)
			header("Location: index.php");
	}
	else
		header("Location: index.php");
	?>
<html>
<head>
<link rel="stylesheet" href="styles/bara.css">
<title>Creare lectie</title>
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
#tutorial {
	width:98.9vw;
	height:100vh;
	position: absolute;
	display:none;
}
.video {
	width:55vw;
	position: absolute;
	z-index:5;
	transform: translate(45%, 10%);
	box-shadow: 0 0 0 99999px rgba(0, 0, 0, .8);
	
}
#inchide {
	position: relative;
    left: 80vw;
    top: 6vh;
    background-color: red;
    color: white;
    border-radius: 50%;
    text-align: center;
    width: 4vh;
    z-index: 6;
    font-size: 3vh;
	display:none;
	cursor:pointer;
}
#inchide:hover {
 background-color:#d10404;
 
}

</style>
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
		echo "<div class='butoane'>";
	echo "<a href='salucrez.php' class='butonn'>Rank</a>";
	echo "<a href='testecod.php' class='butonn'>Probleme</a>";
	echo "</div>";
	
	
	?>	
	
  </div>
  </div>
					

<div id="tutorial">

	<div id="inchide" onclick="x()">X</div>
  <img src="tutoriale/tutorial2.gif" class="video">
  
  
  
  </div>
<form action="include\test_cod.inc.php" method="POST" id="form">
<div class="text">
<input class="titlu" type="text" autocomplete='off' name="enunt" size="80" placeholder="Enunț" required >
<input class="titlu" type="text" autocomplete='off' name="explicatie" size="80" placeholder="Explicație" required >
<div class="capitol" style="font-size:25px;">
	</div>
  <textarea id="froala-editor" name="content"></textarea>
  <br>
<button type="button" id="btn1" class="btn">Adaugă date ieșire</button>
<button type="button"  id="btn2" class="btn">Șterge date ieșire</button>
<br>
  <span id="span"></span>
  <br>
 <input id="imp" name="imp" type="text" style="display:none;">
 <input class="titlu submit" type="submit" name="submit">
  </div>
  
</form>
  
<script>
  $(function() {
  $('textarea#froala-editor').froalaEditor()
});</script>
<script>
var i=0;
$(document).ready(function(){
	
    $("#btn1").click(function(){
	i++;
	var str1 = "<input id='id";
    var str2 = i;
	var str3 = "' type='text' class='date' autocomplete='off' name='data";
    var str4 = "' required>";
    var text = str1.concat(str2,str3,str2,str4);
        $("#span").append(text);
	document.getElementById("imp").value = i;
    });
});

$(document).ready(function(){
    $("#btn2").click(function(){
		if(i>0)
		{var str1 ="#id";
		var str2 = i;
		var text = str1.concat(str2);
        $(text).remove();
		i--;
		document.getElementById("imp").value = i;}
    });
});
</script>
<?php 
$sql1="SELECT * FROM test_cod WHERE id_user=$id_user";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)==0)
{
	echo '<script>
function inchide() {
	document.getElementById("inchide").style.display="block";
	
	
}
function x() {
	document.getElementById("tutorial").style.display="none";
}
document.getElementById("tutorial").style.display="block";
setTimeout(inchide, 10000);

</script>';
}
?>
</body>
</html>