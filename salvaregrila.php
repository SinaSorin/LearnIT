<?php
session_start();
include_once 'include/dbh.inc.php';
 ?>
<html>
	<head>
	</head>
	<body>
		<?php
		if(isset($_POST['submit']))
		{
			
			$nr=$_POST['nr'];
			$var=$_POST['var'];
			$titlu=$_POST['titlu'];
			$id=$_GET['subject'];
			
			echo "<form method='POST' action='include/grila1.inc.php?subject=$nr & var=$var & id=$id & titlu=$titlu'>";
			for($i=1;$i<=$nr;$i++)
			{
				echo "
				<input type='text' name='intrebare$i'><br>";
				for($j=1;$j<=$var;$j++)
					echo "
							<input type='radio' value='$j' name='corect$i'>
							<input type='text' name='var$i$j'><br>";
				echo '<br>';
			}
			echo '<input type="submit" value="submit" name="submitq"/>
				  </form>';
		}
		else
		{
			echo '<form method="POST">
			<input type="text" name="titlu"><br>
			<input type="number" min="1" max="10" name="nr"/></br>
			<input type="number" min="1" max="5" name="var"/></br>
			<input type="submit" value="submit" name="submit"/>';
		}
		?>
		
	</body>
</html>
