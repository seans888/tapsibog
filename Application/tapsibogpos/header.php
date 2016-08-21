<?php
	session_start();
	if($_SESSION['username'] == '')
	{
		header('location:login.php');
	}
	else
	{
		include_once('db/db.php');
	}
	?>
<html> 
<head>
	<title>Tapsibog PoS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body style="background-color:#e3e3e3;">
	<div class="row">
		<div class="container" style="background-color:#efefef;box-shadow:2px 2px 1px 1px">
		<div class="cmd-md-11" style="background-color:brown">
			<center><h2 style="line-height:60px;color:white;"> Tapsibog PoS</h2></center>
		</div>
		<div class="col-md-1">
			<h3><?=$_SESSION['username']?></h3>
			<a href="logout.php">Logout</a>
		</div>
<div class="col-md-3" style="background-color:pink">
	<a style="line-height:30px;" href="category.php">Add Category</a><br/>
	<a style="line-height:30px;" href="category.php">Add Product</a><br/>
	<a style="line-height:30px;" href="order.php">Order</a><br/>
</div>
<div class="col-md-12" style="background-color:white;">
