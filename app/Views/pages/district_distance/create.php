<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Create District Distance</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">District Distances</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/DistrictDistance"; ?>" class="btn btn-sm btn-success">Manage District Distance</a>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>/DistrictDistance/save" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">District</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtDistrict" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Distance (km)</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtDistance" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Factor</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="1" name="txtFactor" />
							</div>
						</div>
					</div>
					<div class="card-footer border-top text-right">
						<button type="submit" class="btn btn-sm btn-info mr-2"><i class="fas fa-save mr-1"></i> Save Change</button>
						<button type="submit" class="btn btn-sm btn-dark float-right">Cancel</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
