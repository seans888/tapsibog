<?php include_once('header.php');
	if(isset($_POST['add']))
	{
		$CategoryName = $_POST['category_name'];
		mysql_query("INSERT INTO category(category_name) VALUES('$CategoryName')");
		header('location:category.php');
	}
?>
	<form action="" method="post">
	<table class="table">
		<tr>
			<td>
				<LABEL>CategoryName</LABEL>
				<input type="text" name="category_name" class="form-control">
			</td>
			<td><br><input type="submit" name="add" value="Add" class="btn btn-primary"></td>
	</table>
	</form>
<?php include_once('footer.php');?>