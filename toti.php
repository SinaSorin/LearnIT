<?php
include_once 'include/dbh.inc.php';
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "<ol>";
	while($row=mysqli_fetch_assoc($result))
	{
		$id=$row['user_id'];
		$user=$row['user_uid'];
		$status=$row['user_status'];
		echo "<li>".$user."   ".$status;
		if($status==1)
			echo 'Admin';
		else
			if($status==3)
		echo "<form method='POST' action='include\upgrade.inc.php?subject=$id'>
			  <input type='submit' value='Upgrade' name='submit$id'>
			  </form>";
			  else
				  echo "<form method='POST' action='include\demote.inc.php?subject=$id'>
			  <input type='submit' value='Demote' name='submit$id'>
			  </form>";
				  
		echo "</li>";
	}
	echo "</ol>";
		
}



?>