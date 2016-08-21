<?php include_once('header.php');
	if(isset($_POST['add']))
	{
		$CategoryName = $_POST['category_name'];
		$id 		  = $_POST['id'];
		mysql_query("UPDATE category SET category_name = '$CategoryName' WHERE id = '$id'");
		header('location:category.php');
	}
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$r = mysql_fetch_object(mysql_query("SELECT * FROM category WHERE id = '$id'"));
	}
?>
	<form action="" method="post">
	<table class="table">
		<tr>
			<input type="hidden" name="id" value="<?= $r->id ?>">
			<td>
				<LABEL>CategoryName</LABEL>
				<input type="text" value="<?= $r->category_name ?>" name="category_name" class="form-control">
			</td>
			<td><br><input type="submit" name="add" value="Update" class="btn btn-primary"></td>
	</table>
	</form>
<?php include_once('footer.php');?>