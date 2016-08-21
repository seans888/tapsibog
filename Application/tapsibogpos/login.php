<?php
	include_once('db/db.php');
	$error = '';
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$get_data = mysql_query("SELECT * FROM poslogin WHERE username = '$username' and password = '$password'");
	if($row = mysql_num_rows($get_data))
	{
		
		$_SESSION['username'] = $username;
		header('location:index.php');
	}
	else
	{
		$error.= "incorrect login";
	}
}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form action="" method="post">
			<h5><?php if(isset($error)){echo $error; } ?></h5> 
			<h2>Login</h2>
				<table>
					<tr>
						<td>
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</td>
					</tr>
					<label><a href="register.php">Register</a></label>
					<input type="submit" name="login" class="btn btn-primary" value="Login">
				</table>
			</form>
		</div>
		 <div class="col-md-4">
		</div>
	</div>
</body>
</html> 