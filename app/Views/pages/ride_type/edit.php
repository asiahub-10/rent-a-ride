<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Edit Ride Type</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Ride Types</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/RideType"; ?>" class="btn btn-sm btn-success">Manage Ride Type</a>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>/RideType/update" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<input type="hidden" class="form-control" name="txtId" value="<?php echo $ride_type['id']; ?>" />
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtName" value="<?php echo $ride_type['name']; ?>" />
							</div>
						</div>
					</div>
					<div class="card-footer border-top">
						<button type="submit" class="btn btn-sm btn-info"><i class="fas fa-save mr-1"></i> Save Change</button>
						<button type="submit" class="btn btn-sm btn-dark float-right">Cancel</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
