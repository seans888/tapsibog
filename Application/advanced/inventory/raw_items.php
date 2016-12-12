<?php require_once 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-12">
	<ol class="breadcrumb">
		<li><a href="dashboard.php">Home</a></li>
		<li class="active">Raw items</li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Raw Items</div>
		<div class="panel-body">
		<div class="remove-messages"></div>

		<div class="div-action pull pull-right" style="padding-bottom">
			<button class="btn btn-default" data-toggle="modal" data-target="#addRawItemModal"> <i class="glyphicon glyphicon-plus-sign"></i> Add Raw Item </button>
		</div>

		<table class="table" id="manageRawItemTable">
			<thead>
				<tr>
					<th>Raw Item name</th>
					<th>Quantity</th>
					<th>Status</th>
					<th style="width:15%;">Options</th> 
				</tr>

		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="addRawItemModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Add Raw Items</h4>
				</div>
				<form class="form-horizontal" id="submitRawItemForm" action="php_action/createRawItem.php" method="POST">


				<div class="modal-body">
					
						<div class="form-group">
						<label for="RawItemName" class="col-sm-3 control-label"> Raw Item </label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="RawItemName" name="RawItemName" placeholder="RawItemName" autocomlete="off">
						</div>
						</div>

						<div class="form-group">
						<label for="RawItemQuantity" class="col-sm-3 control-label"> Quantity </label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="RawItemQuantity" name="RawItemQuantity" placeholder="Raw Item Quantity">
						</div>
						</div>

						<div class="form-group">
						<label for="RawItemStatus" class="col-sm-3 control-label"> Status: </label>
						<div class="col-sm-9">
							<select class="form-control" id="RawItemStatus" name="RawItemStatus">
								<option value=""> - SELECT - </option>
								<option value="1">Available</option>
								<option value="2">Not Available</option>
							</select>
						</div>
						</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" id="createRawItembtn" data-loading-text="Loading..">Save changes</button>
				</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" tabindex="-1" role="dialog" id="editRawItemModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Edit Raw Items</h4>
				</div>

					<form class="form-horizontal" id="editRawItemForm" action="php_action/editRawItemForm.php" method="POST">

				<div class="modal-body">
					
			

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>

					</form>
			</div>
		</div>
	</div>


	<div class="modal fade" tabindex="-1" role="dialog" id="addRawItemModal" id="removeRawItemModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Remove Raw Item</h4>
				</div>

				<div class="modal-body">
					<p>Are you sure?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	</div>
</div>

<script type="text/javascript" src="inventory/custom/js/brand.js"></script>

<?php require_once 'includes/footer.php'; ?>