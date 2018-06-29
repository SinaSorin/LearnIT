<?php 
if(isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	
	$first=$_POST['first']; // preiau informatiile de la pagina "signup.php"
	$last=$_POST['last'];
	$email=$_POST['email'];
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$pwd2=mysqli_real_escape_string($conn,$_POST['pwd2']);
	
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) { // ma asigur ca au fost completate toate campurile
		header("Location: ../index.php?signup=empty");
		exit();
	}
	else {
		if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last) ) { // numele si prenumele contin doar litere
			header("Location: ../index.php?signup=invalid");
			exit();
		}else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // ma asigur ca a fost introdusa o adresa de mail
				header("location: ../index.php?signup=invalidEMAIL");
				exit();
			}
			else {
				if(strlen($pwd)<5){
					header("location: ../index.php?signup=passwordtooshort");
					exit();
				}else {
					if($pwd!=$pwd2) {
				header("location: ../index.php?signup=errorpassword");
				exit();
				}
				else {
						$sql ="SELECT * FROM user WHERE user_uid='$uid'" ;
						$result= mysqli_query($conn,$sql);
						$resultCheck= mysqli_num_rows($result);
						if($resultCheck > 0) { // ma asigur ca numele pe care utilizatorul l-a ales nu exista deja
							header("Location: ../signup.php?signup=USERTAKEN");
							exit();
					
						}else {
							$hash1=md5($pwd);
							$hashedPwd = sha1($hash1); //am criptat parola
							$sql= "INSERT INTO user(user_first, user_last, user_email,user_uid, user_pwd,user_status) VALUES('$first' ,'$last','$email','$uid','$hashedPwd','3' );";
							mysqli_query($conn,$sql);//contul a fost creat
							$sql="SELECT * FROM user WHERE user_uid='$uid' AND user_first='$first'";
							$result=mysqli_query($conn,$sql);
							if(mysqli_num_rows($result) > 0 ) {
								while ($row = mysqli_fetch_assoc($result)) {
									$userid=$row['user_id'];
									$src="uploads/profiledefault.jpg";
									$sql="INSERT INTO profileimg (userid,status,src) VALUES ($userid,1,'$src')";
									mysqli_query($conn,$sql);//utilizatorul nu si-a ales o poza de profil: status -->1 ; utilizatorul isi alege poza status-->0
									$sql="INSERT INTO rank (id_user,nivel,xp) VALUES ($userid,1,0)";
									$result=mysqli_query($conn,$sql);
									header("Location: ../index.php");
								}

							}
							else {
								echo "you have an error";
							}
						exit();
					
						}
					}
				}
				
				}
			
			
			}
		
	}
	
}else {
	header("Location: ../signup.php");
	exit();
}
?>