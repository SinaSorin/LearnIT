<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" /></head>
<style>
body{
	background-color:#f6f6f6;
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
<form action="include/lectie.inc.php" method="POST">
<div class="text">
<input class="titlu" type="text" name="titlu" placeholder="titlu">
<div class="capitol" style="font-size:25px;"> Capitol:
<select class="titlu2" name="capitol">
	<?php
	session_start();
	include_once 'include/dbh.inc.php';
	$sql="SELECT * FROM capitole";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$capitol=$row['titlu'];
			echo "<option value='$capitol'>$capitol</option>";
		}
			
	}

	?>
  </select>
	</div>
  <textarea id="froala-editor" name="content"></textarea>
	
  
  
  <input class="titlu submit" type="submit" name="submit">
  </div>
</form>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
<script>
  $(function() {
  $('textarea#froala-editor').froalaEditor()
});</script>
</body>
</html>