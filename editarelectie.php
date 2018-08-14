<?php
	session_start();
	include_once 'include/dbh.inc.php';
?>
<html>
<head>
<title>Creare lectie</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles/bara.css">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" /></head>
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
	
	
	?>	
	
  </div>
  </div>
					
  </div>
<?php
$id_lectie=$_GET['subject'];
$sql="SELECT * FROM lectii WHERE id='$id_lectie'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$lectie=$row['lectie'];
		$user=$row['id_user'];
		$titlu=$row['titlu'];
		$size=strlen($titlu);
		
	}
}

echo "<form action='include/edit.inc.php?subject=$id_lectie' method='POST'>
<div class='text'>
<input class='titlu' type='text' name='titlu' autocomplete='off' placeholder='titlu' value='$titlu' size='$size'>


  <textarea id='froala-editor' name='content'>$lectie</textarea>
	
  
  
  <input class='titlu submit' type='submit' name='submit'>
  </div>
</form>";
 ?>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
<script>
  $(function() {
  $('textarea#froala-editor').froalaEditor()
});</script>
</body>
</html>