<?php

$capitol=$_POST['çapitol'];
if(isset($_POST['submit']))
{
	$sql="INSERT INTO capitole(titlu) VALUES($capitol)";
	$result=mysqli_query($conn,$sql);

}

 ?>