<?php 
session_start();
include_once 'include/dbh.inc.php';
?>
<html>
	<head>
	<title>Test</title>
 <link rel="shortcut icon" href="logo2.png" type="image/png">
   <link rel="stylesheet" href="styles/bara.css">
   <link rel="stylesheet" href="styles/modal.css">
  
 
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
  
  

.verde {
	color:green;
}
.rosu {
	color:red;
}

.sterge {
    font-size: 3vh;
    position: relative;
    bottom: 1.2vh;
    border: 2px solid red;
    border-radius: 50%;
    padding: 8px;
    text-align: center;
    color: red;
    padding-top: 0px;
    padding-bottom: 0px;
}


	</style>
	
	</head>
	<body>
	
	<div class="bara">
	<?php 
	$id=$_GET['subject'];
	$sql="SELECT * FROM test WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$id_lectie=$row['id_lectie'];
		}
	}
	$sql="SELECT * FROM lectii WHERE id='$id_lectie'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$lectie=$row['titlu'];
			$capitol=$row['capitol'];
			$id_capitol=$row['id_capitol'];
		}
	}
	if(!isset($_SESSION['u_id']))
		echo '
				<a href="#" data-toggle="modal" data-target="#register-modal"><div class="lr divs link">Register</div></a>

				<a href="#" class="link" data-toggle="modal" data-target="#login-modal"><div class="lr divs link">Login</div></a>';
	else
		echo '<form action="include/logout.inc.php" method="POST" >
					<input class="lr divs link" type="submit" name="submit" value="Deconectează-te"> 
					</form> ';
	
  ?>
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
	echo "<div class='butoane'>";
	
	echo "<a href='lectii.php' class='butonn'>Capitole</a>";
	echo "<a href='lectiecapitol.php?subject=$capitol & id=$id_capitol' class='butonn'>$capitol</a>";
	echo "<a href='continutlectie.php?subject=$lectie & id_lectie=$id_lectie' class='butonn'>Lectie</a>";
	echo "</div>";
	
	?>	
	
  </div>
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
	
	$user=$row['id_user'];
	
		if(($_SESSION['u_id']==$user and $_SESSION['u_status']!=3) or $_SESSION['u_status']==1 )
		{	
			echo "<a href='include/droptest.inc.php?id=$id'><span class='sterge' style='float:right;'>x</span></a>";

			
		}
	
	
	

	
	
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
		echo round($nota, 2);
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
			{	$vars=1;
				$sql9="INSERT INTO medii(id_user,nr,medie) VALUES($id_user,$vars,$nota)";
				$result9=mysqli_query($conn,$sql9);
			}
			else
				if(mysqli_num_rows($result8)<5)
				{
					$sql10="SELECT * FROM note WHERE id_user=$id_user";
					$result10=mysqli_query($conn,$sql10);
					$num=mysqli_num_rows($result10);
					if($num>0)
					{
						$sum=0;
						while($row=mysqli_fetch_assoc($result10))
						{
							$sum+=$row['nota'];
						}
					}
					$medie=$sum/$num;
					$nr=mysqli_num_rows($result8)+1;
					$sql11="INSERT INTO medii(id_user,nr,medie) VALUES($id_user,$nr,$medie)";
					$result11=mysqli_query($conn,$sql11);
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
									$m1=$row12['medie'];
									$sql13="UPDATE medii SET medie=$m1 WHERE nr=$i";
									$result13=mysqli_query($conn,$sql13);
								}
							}

						
					}
					$sql14="SELECT * FROM note WHERE id_user=$id_user";
					$result14=mysqli_query($conn,$sql14);
					$num=mysqli_num_rows($result14);
					if($num>0)
					{
						$sum=0;
						while($row=mysqli_fetch_assoc($result14))
						{
							$sum+=$row['nota'];
						}
					}
					$medie=$sum/$num;
					$nr=mysqli_num_rows($result8)+1;
					$sql15="UPDATE  medii SET medie=$medie WHERE nr=5";
					$result15=mysqli_query($conn,$sql15);
					
				}
		}
		
	}
	
	
	
	
	
	
	?>
	</div>
	</body>
</html>