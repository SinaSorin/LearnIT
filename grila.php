<?php
session_start();
include_once 'include/dbh.inc.php';
 ?>
<html>
	<head>
	</head>
	<body>
<form action="grila2.php?subject=3" method="POST">
			<input type="text" name="titlu"><br>

			<input type="submit" value="submit" name="submit"/>
			</form>
	</body>
</html>
