<?php 
session_start();
include_once 'include/dbh.inc.php';
?>
<html>
	<head>
	<title>Test</title>
	<style>
	 body {
	background-color:#e5ebe7;
	margin:0px;
	padding:0px;
	    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  }
  
  .tot {
	color:black;
	width:70%;
	margin-left:auto;
	margin-right:auto;
	padding:24px;
	
	background-color:#ffffffb5;
	margin-top:40px;
	font-size:24px;
	box-sizing: border-box;
}
  
  
	.bara {
	position:relative;
	background-color:#10BBB3;
	width:100%;
	height:50px;
	z-index:2;
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

.link {
font-size:18px;
}

.lr {
	position:relative;
	float: right;
	width:auto;
}
.divs {
	background-color:#10BBB3;
	border:0px;
	color:white;
	opacity:0.8;
	margin-bottom:32px;
	padding:12px;
  }
.row {
	
	width:100%;
	height:500px;
}

	a {
		text-decoration:none;
		color:black;
	}
	.divs:hover {
		background-color:#208b86;
	}
.verde {
	color:green;
}
.rosu {
	color:red;
}
	</style>
	
	</head>
	<body>
	
	<div class="bara">
	<?php 
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Register</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Login</div></a>';
	else
		echo '<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Log out"> 
					</form> ';
  ?>
  </div>
   
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form action="include/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="username"> 
						<input type="password" name="pwd" placeholder="password">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Login">
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					<h1>Sign up</h1><br>
				  <form action="include/signup.inc.php" method="POST">
						<input type="text" name="user_first" placeholder="First name"> 
						<input type="text" name="user_last" placeholder="Last name">
						<input type="text" name="user" placeholder="Username">
						<input type="text" name="user_email" placeholder="Email">
						<input type="password" name="pwd" placeholder="Password">
						<input type="password" name="pwd2" placeholder="Confirm password">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Register">
				  </form>
					
				 
				</div>
			</div>
		  </div>
	<div class="tot">
	<?php 
	$id=$_GET['subject'];
	
	
	if(!isset($_POST['submit']))
	{
		echo "<form method='POST'>";
		$sql1="SELECT * FROM intrebari WHERE id_test=$id";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			$i=0;
			while($row=mysqli_fetch_assoc($result1))
			{
				$i++;
				$intrebare=$row['continut'];
				$id_intrebare=$row['id'];		
				echo $i.". ".$intrebare."<br/>";
				$sql2="SELECT * FROM raspuns WHERE id_intrebare=$id_intrebare";
				$result2=mysqli_query($conn,$sql2);
				if(mysqli_num_rows($result2)>0)
				{
					while($row2=mysqli_fetch_assoc($result2))
					{
						$raspuns=$row2['continut'];
						$j=$row2['id'];
						echo "<input type='radio' value='$j' name='corect$i'>$raspuns<br/>";
					}
				}
				
		}
		
			echo "<br><input type='submit' value='submit' name='submit'>"; 
		}
		echo "</form>";
	}
	else
	{
		$sql3="SELECT * FROM intrebari WHERE id_test=$id";
		$result3=mysqli_query($conn,$sql3);
		if(mysqli_num_rows($result3)>0)
		{
			$i=0;
			while($row3=mysqli_fetch_assoc($result3))
			{
				$i++;
				$intrebare=$row3['continut'];
				$id_intrebare=$row3['id'];
				echo $i.".".$intrebare."<br>" ;
				$sql4="SELECT * FROM raspuns WHERE id_intrebare=$id_intrebare";
				$result4=mysqli_query($conn,$sql4);
				if(mysqli_num_rows($result4)>0)
				{
					echo  "<ul>";
					while($row4=mysqli_fetch_assoc($result4))
					{
						
						$raspuns=$row4['continut'];
						$corect_r=$row4['corect'];
						$id_r=$row4['id'];
						$id_checked=$_POST["corect$i"];
						if($id_r==$id_checked)
							if($corect_r==1)
								echo "<b><li class='verde'>$raspuns</li></b>";
								//verde
							else
								echo "<b><li class='rosu'>$raspuns</li></b>";
								//rosu
						else
							if($corect_r==1)
								echo "<b><li class='verde'>$raspuns</li></b>";
								//verde
							else
								echo "<li>$raspuns</li>";
								//nimic
					}
					echo "</ul>";
				}
			}
		}

		$corect=0;
		for($k=1;$k<=$i;$k++)
		{
			$answer=$_POST["corect$k"];
			$sql5="SELECT * FROM raspuns WHERE id=$answer";
			$result5=mysqli_query($conn,$sql5);
			if(mysqli_num_rows($result5)>0)
			{
				while($row5=mysqli_fetch_assoc($result5))
				{
					$corect2=$row5['corect'];
					if($corect2==1)
					$corect++;
					
				}
			}
		}
		$nota=($corect/$i)*100;
		echo $nota;
		$id_user=$_SESSION['u_id'];
		$sql6="SELECT * FROM note WHERE id_user=$id_user AND id_test=$id";
		$result6=mysqli_query($conn,$sql6);
		if(mysqli_num_rows($result6)==0)
		{
			$sql7="INSERT  INTO note(id_user,id_test,nota) VALUES($id_user,$id,$nota)";
			$result7=mysqli_query($conn,$sql7);
			$sql8="SELECT * FROM medii WHERE id_user=$id_user";
			$result8=mysqli_query($conn,$sql8);
			if(mysqli_num_rows($result8)==0)
			{
				$sql9="ÏNSERT INTO medii(id_user,nr,medie) VALUES($id_user,1,$nota)";
				$result9=mysqli_query($conn,$sql9);
			}
			else
				if(mysqli_num_rows($result8)<5)
				{
					$sql10="SELECT AVG(nota) FROM note WHERE id_user=$id_user";
					$result10=mysqli_query($conn,$sql10);
					$nr=mysqli_num_rows($result8)+1;
					$sql11="INSERT INTO medii(id_user,nr,medie) VALUES($id_user,$nr,$result10)";
				}
				else
				{
					for($i=1;$i<=4;$i++)
					{
							$j=$i+1;
							$sql12="SELECT * FROM medii WHERE id_user=$id_user AND nr=$j";
							$result12=mysqli_query($conn,$sql12);
							if(mysqli_num_rows($result12)>0)
							{
								while($row12=mysqli_fetch_assoc($result12))
								{
									$m1=$row['medie'];
									$sql3="UPDATE medii SET medie=$m1 WHERE nr=$i";
									$result13=mysqli_query($conn,$sql13);
								}
							}

						
					}
					$sql14="INSERT INTO medii(medie) VALUES($result10) WHERE nr=5";
					$result14=mysqli_query($conn,$sql14);
					
				}
		}
		
	}
	
	
	
	
	
	
	?>
	</div>
	</body>
</html>