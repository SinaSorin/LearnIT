<?php 
session_start();
include_once 'include/dbh.inc.php';
$id_user=$_SESSION['u_id'];
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
  }
  
.s1 {
	width:100%;height:95%;
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