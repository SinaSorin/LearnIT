<?php
session_start();
include_once 'include/dbh.inc.php';
if(isset($_POST['submitnr']))
{
	$nr=$_POST['nr'];
	$titlu=$_GET['titlu'];
	echo "<form action='grila4.php?nr=$nr & titlu=$titlu ' method='POST'>";
	for($i=1;$i<=$nr;$i++)
				echo "
				<input type='text' name='intrebare$i'><br>";
		echo '<input type="submit" value="submit" name="submitq"/>
				  </form>';
}
	?>