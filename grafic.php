<?php
session_start();
include_once 'include/dbh.inc.php';
 ?>
<html>
<title>Profil</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<canvas id="myChart" width="300" height="50"></canvas>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [<?php
		$id_user=$_SESSION['u_id'];
		$sql1="SELECT * FROM medii WHERE id_user=$id_user";
		$result1=mysqli_query($conn,$sql1);
		$labels=mysqli_num_rows($result1);
		for($i=1;$i<=$labels-1;$i++)
			echo "'$i',";
		echo "'$labels'";
		?>],
        datasets: [{
            label: "my first data",
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
			pointRadius: 1,
			pointHitRadius: 10,
        }]
    }
});
</script>
</html>