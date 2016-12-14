<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Tapsibog Inventory System</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>

</head>

<!DOCTYPE html>
<html>
<body>

<center>
<img src="tapsibogs.png" alt="Tapsibog">
</center>
</body bgcolor="#ff8533">
</html>

<title>Tapsibog Inventory System</title>
<center>
<br>
<br>
<a href="orders.php?o=add"><button class="btn btn-warning button1 btn-lg"  data-target="#addBrandModel"> ADD ORDER</button></a>
<br><br><br>
<a href="brand.php"><button class="btn btn-info button1 btn-lg"  data-target="#addBrandModel"> Item Descriptions</button></a>
<a href="categories.php"><button class="btn btn-info button1 btn-lg"  data-target="#addBrandModel"> Categories</button></a>
<a href="product.php"><button class="btn btn-info button1 btn-lg"  data-target="#addBrandModel"> Products</button></a>
<br>
<br>
<a href="logout.php"><button class="btn btn-danger button1 btn-lg"  data-target="#addBrandModel"> Logout</button></a>
</center>

<?php require_once 'includes/footer.php'; ?>