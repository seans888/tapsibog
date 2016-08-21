<?php include('header.php'); ?>
<table class="table">
			<center><h2>Invoice</h2></center>
			 
				<td>
					<label>Date Order</label>
					<?= date('d-M-Y'); ?>
				</td>
		</table>
				
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
			<div id="Tabs" role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">
						Personal</a></li>
					<li><a href="#employment" aria-controls="employment" role="tab" data-toggle="tab"> Employment</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content" style="padding-top: 20px">
					<div role="tabpanel" class="tab-pane active" id="personal">
						This is Personal Information Tab
					</div>
					<div role="tabpanel" class="tab-pane" id="employment">
						This is Employment Information Tab
					</div>
				</div>
			</div>
		</div>
			</div>
			<div class="col-md-6">
			
			</div>
			<div class="col-md-6">
				<table class="table" table-borderd table-hover>
				<thead>
					<tr>
						<th>ProductName</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Discount</th>
						<th>Amount</th>
						<th>ProductName</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="product_name[]" class="form-control"></td>
						<td><input type="text" name="quantity[]" class="form-control"></td>
						<td><input type="text" name="price[]" class="form-control"></td>
						<td><input type="text" name="discount[]" class="form-control"></td>
						<td><input type="text" name="amount[]" class="form-control"></td>
						<td><a href="#" class="remove">Del</a></td>
					</tr>
				</tbody>
			</div>
<?php include('footer.php'); ?>