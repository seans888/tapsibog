<?php include_once('header.php');
	$sms = '';
	if(isset($_GET['idd']))
	{
		$id = $_GET['idd'];
		mysql_query("DELETE FROM category WHERE id = '$id'");
		$sms .= "Delete Successful";
	}
?>
	<a href="add_category.php">Add New</a>
		<center><h5 style="color:red;"><?php if(isset($sms)){echo$sms;}?></h5></center>
	<table class="table table-bordered table=hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Category Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$q = mysql_query("SELECT * FROM category");
				while($row = mysql_fetch_object($q))
				{
					?>
						<tr>
							<td><?= $row->id ?></td>
							<td><?= $row->category_name ?></td>
							<td><a href="edit_category.php?id=<?= $row->id ?>">Edit</a>|<a href="category.php?idd=<?= $row->id ?>">Delete</a></td>
						</tr>
					<?php
				}
			?>
	</table>
<?php include_once('footer.php');?>
