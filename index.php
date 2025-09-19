<?php session_start(); 
  include('dbcon.php');
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			//For Admin User
			$query= mysqli_query($con, "SELECT * FROM users WHERE  pass='$password' and user='$username' and rights='Admin' and status='Y'");
			$row= mysqli_fetch_array($query);
			$num_row= mysqli_num_rows($query);
			if ($num_row > 0) {			
					$_SESSION['id']=$row['id'];
					header('location:admin.php');}
			
				//For Registration User
				$query= mysqli_query($con, "SELECT * FROM users WHERE  pass='$password' and user='$username' and rights='reg' and status='Y'");
			$row= mysqli_fetch_array($query);
			$num_row= mysqli_num_rows($query);
			if ($num_row > 0) {			
					$_SESSION['id']=$row['id'];
					header('location:regist.php');}
				//For Medical Officers User
				$query= mysqli_query($con, "SELECT * FROM users WHERE  pass='$password' and user='$username' and rights='doc' and status='Y'");
			$row= mysqli_fetch_array($query);
			$num_row= mysqli_num_rows($query);
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:doctors.php');
				}
			
				//For Pharmacy User
				$query= mysqli_query($con, "SELECT * FROM users WHERE  pass='$password' and user='$username' and rights='opd' and status='Y'");
			$row= mysqli_fetch_array($query);
			$num_row= mysqli_num_rows($query);
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:opd.php');
				}
				//For Lab User
				$query= mysqli_query($con, "SELECT * FROM users WHERE  pass='$password' and user='$username' and rights='lab' and status='Y'");
			$row= mysqli_fetch_array($query);
			$num_row= mysqli_num_rows($query);
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:lab.php');
				}
					//For Reports User
				$query= mysqli_query($con, "SELECT * FROM users WHERE  pass='$password' and user='$username' and rights='rep' and status='Y'");
			$row= mysqli_fetch_array($query);
			$num_row= mysqli_num_rows($query);
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:reports.php');
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
  <html>
<head>
<link rel="stylesheet" type="text/css" href="stylelog.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  
</div>

</body>
</html>