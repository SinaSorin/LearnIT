<?php
	session_start();
	include_once 'include/dbh.inc.php';
	$i=0;
	$j=0;
	if(isset($_SESSION['u_id']))
	{
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
<title>Creare exercitiu</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" /></head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
* {
	font-size:22px;
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
  	@import url(http://fonts.googleapis.com/css?family=Roboto);


/****** REGISTER MODAL ******/
.registermodal-container {
  padding: 30px;
  max-width: 550px;
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

.cod1 {
	border:2px solid #10BBB3;
	border-radius:20px;
	padding:30px;
	
}
.ajutor {
	border:2px solid #c81b1b;
	float:right;
	width:30px;
	text-align:center;
	position:relative;
	bottom:10px;
	color:#c81b1b;
}
.modal {
	margin-top:30px;
	
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
	echo "<a href='testedrag.php' class='butonn'>Exerciții</a>";
	echo "</div>";
	
	
	?>	
	
  </div>
  </div>
<?php 
$cod=mysqli_real_escape_string($conn,$_POST['content']);
$enunt=mysqli_real_escape_string($conn,$_POST['enunt']);

?>		


<form action="include\dragdrop.inc.php" method="POST" id="form">
<div class="text">
<a href="#"  data-toggle="modal" data-target="#register-modal" style="text-decoration:none;background:">
	
<div class="ajutor">
?
</div>
</a>
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					
					Selectează rândul care vrei să fie completat apoi apasă pe butonul "+" pentru variantele corecte. Pentru a crește dificultatea poți adaugă și variante greșite. Dacă apeși pe butoanele "-" poți elimina variante.
				 
				</div>
			</div>
		  </div>
Codul introdus de tine:
<div id="cod" class='cod1'>

<?php echo $cod; ?>
</div>


<input value="<?php echo $enunt ?>" style="display:none" name="enunt">
<input style="display:none" id="content" name="content">
  <p>Variante corecte:</p>
<button type="button" id="btn1" class="btn">+</button>
<button type="button"  id="btn2" class="btn">-</button>
<br>
  <span id="span"></span>
  <br>
 <input id="imp" name="imp" type="text" style="display:none;">
  
  <p>Variante greșite:</p>
  <button type="button" id="btn3" class="btn">+</button>
<button type="button"  id="btn4" class="btn">-</button>
<br>
  <span id="span2"></span>
  <br>
 <input id="imp2" name="imp2" type="text" style="display:none;">
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
	var str3 = "' type='text' class='date' name='data"
    var str4 = "' required>"
    var text = str1.concat(str2,str3,str2,str4);
        $("#span").append(text);
	document.getElementById("imp").value = i;
	
	var markerTextChar = "\ufeff";
    var markerTextCharEntity = "&#xfeff;";

    var markerEl, markerId = "sel_" + new Date().getTime() + "_" + Math.random().toString().substr(2);

    var selectionEl;

   
        var sel, range;

       if (window.getSelection) {
            sel = window.getSelection();

            if (sel.getRangeAt) {
                range = sel.getRangeAt(0).cloneRange();
            } else {
              
                range = document.createRange();
                range.setStart(sel.anchorNode, sel.anchorOffset);
                range.setEnd(sel.focusNode, sel.focusOffset);

                
                if (range.collapsed !== sel.isCollapsed) {
                    range.setStart(sel.focusNode, sel.focusOffset);
                    range.setEnd(sel.anchorNode, sel.anchorOffset);
                }
            }

            range.collapse(false);

            
        }

       
		newNode = document.createElement("span");
newNode.appendChild(document.createTextNode(""));
range.insertNode(newNode);
	
	var id='id'+document.getElementById("imp").value;
	var selObj = window.getSelection();
	var selectedText=selObj.toString();
	document.getElementById(id).value=selectedText;
	
    
	document.getElementById("content").value=document.getElementById("cod").innerHTML;
	
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
		document.getElementById("imp").value = i;
		}
		document.getElementById("content").value=document.getElementById("cod").innerHTML;
	
    });
});


    

</script>


<script>
var j=0;
$(document).ready(function(){
	
    $("#btn3").click(function(){
	j++;
	var str1 = "<input id='idx";
    var str2 = j;
	var str3 = "' type='text' autocomplete='off' class='date' name='dataf"
    var str4 = "' required>"
    var text = str1.concat(str2,str3,str2,str4);
        $("#span2").append(text);
	document.getElementById("imp2").value = j;
    });
});

$(document).ready(function(){
    $("#btn4").click(function(){
		if(j>0)
		{var str1 ="#idx";
		var str2 = j;
		var text = str1.concat(str2);
        $(text).remove();
		j--;
		document.getElementById("imp2").value = j;}
    });
});
</script>

</body>
</html>