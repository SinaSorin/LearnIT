<?php
session_start();
include_once 'include/dbh.inc.php';
$id=$_SESSION['u_id'];
if(isset($_POST['submit'])) {
	$file=$_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.',$fileName);
	$fileActuaExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','png');
	
	if(in_array($fileActuaExt, $allowed)) {
		if($fileError == 0) {
			if($fileSize <  1000000 )  {
				$fileNameNew="profile".$id.".".$fileActuaExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				$sql="UPDATE profileimg
				      SET status = 0
					  WHERE userid ='$id';";// odata ce a fost incarcata o imagine status devine 0
				$result = mysqli_query($conn,$sql);
				$sql="UPDATE profileimg SET src='$fileDestination' WHERE userid=$id;";
				$result=mysqli_query($conn,$sql);
				$status=$_SESSION['u_status'];
				if($status==1)
				header("Location: toti.php");
				else
				header("Location: cont.php");
				
			}else {
				echo 'your file is too big';
			}
			
			
		}else {
			echo 'There was an error uploading the file';
		}
		
	}else {
		echo "you can't upload files of this type.";
	}

	
}