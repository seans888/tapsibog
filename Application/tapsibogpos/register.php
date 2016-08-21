<?php
	include_once('db/db.php');
	$error = '';
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	mysql_query("INSERT INTO poslogin(username,password) VALUES('$username','$password')");
	$i = mysql_insert_id();
	if($i > 0)
	{
		$error .= "Register Successful";
	}
	else
	{
		$error.="Failed"; 
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
			<h2>Register</h2>
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
					<input type="submit" name="login" class="btn btn-primary" value="Register">
					<a href="login.php">Back to Login page</a>
				</table>
			</form>
		</div>
		 <div class="col-md-4">
		</div>
	</div>
</body>
</html> 