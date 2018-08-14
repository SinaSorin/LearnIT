<?php 
session_start();
include_once 'include/dbh.inc.php';
$id_user=$_SESSION['u_id'];
?>

<html>
<head>
<title>Profil</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
<style>
body {
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
	.titlu {
		font-size:52px;
		width:40%;
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
	height:6.5%;
	z-index:2;
}
.row {
	
	width:100%;
	height:500px;
}
.profil{
	position:relative;
	
	background-color:#10BBB3;
	width:20%;
	height:80%;
	
}
.s1 {
	width:100%;height:95%;
}
.s2 {
	width:25%; 
	float:left;
	background-color:#009999;
	height:100%;
}
.s3 {
	heigh
	width:75%; 
	float:left;
	height:100%;
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
    font-size: 1.25em;
    font-weight: 700;
 padding:5px;
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
 padding: 4px;
 width: 100px;
 height: 50px;
 margin: 20px;
 border:none;
 font-weight: 700;
 background-color: #f3f3f3;
 font-family":"arial";
 font-size: 14px;
 color: #111;
 cursor: pointer;
}
.profileimg:hover {
 background-color: #ccc;
}
.profil {
	width:250px;
	height:250px;
	border-radius:50%;
	position:relative;
	top:120px;
	left:60px;
}
.form {
	position:relative;
	top:150px;
	left:20px;
}
.profil2{
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
</style>
</head>
<body>

<div class="bara">
	<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconectează-te"> 
		
		</form>
		<div class="profil2">
  
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
class="profil">
 <form class="form" action='upload.php' method='POST' enctype='multipart/form-data' >
    <input type="file" name="file" id="file" class="inputfile" />
     <label for="file">Schimbă-ți poza de profil</label>
    <button type='submit' name='submit' class="profileimg">Încarcă</button> <!--personalizarea profilului -->
    </form>
</section>
<section class="s3">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<canvas id="myChart" width="1115" height="600"></canvas>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [<?php
		$sql1="SELECT * FROM medii WHERE id_user=$id_user";
		$result1=mysqli_query($conn,$sql1);
		$labels=mysqli_num_rows($result1);
		for($i=1;$i<=$labels-1;$i++)
			echo "'$i',";
		echo "'$labels'";
		?>],
        datasets: [{
            label: "Evoluția ta",
			fill: false,
			lineTension: 0.1,
			data: [
			<?php
			$data=array();
			$i=0;
				while($row=mysqli_fetch_assoc($result1))
				{
					$i++;
					$data[$i]=$row['medie'];
				}
				for($i=1;$i<=$labels-1;$i++)
					echo $data[$i].",";
				echo $data[$labels];



			?>],
			backgroundColor: "rgba(75,192,192,0.4)",
			borderColor: "rgba(75,192,192,1)",
			borderCapStyle: 'butt',
			borderDash: [],
			borderDashOffset: 'miter',
			pointBorderColor: "rgba(75,192,192,1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgrundColor: "rgba(75,192,192,1)",
			pointHoverBorderColor: "rgba(75,192,192,1)",
			pointHoverBorderWidth: 2,
			pointRadius: 10,
			pointHitRadius: 10,
        }]
    }
});
</script>
</section>
</section>
</body>
</html>