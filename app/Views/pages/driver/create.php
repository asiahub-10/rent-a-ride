<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Create Driver</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Drivers</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/Driver"; ?>" class="btn btn-sm btn-success">Manage Driver</a>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>/Driver/save" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtName" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Dob</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="dob" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Gender</label>
							<div class="col-sm-10">
								<input type="radio" class="" name="rdoGender" value="0" /> Male <span class="px-1"></span>
								<input type="radio" class="" name="rdoGender" value="1" /> Female
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Phone</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtPhone" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Nid</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtNid" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Address</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtAddress" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Driving license no</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtDrivingLicenseNo" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">License issue date</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="txtLicenseIssueDate" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">License validity date</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="txtLicenseValidityDate" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Photo</label>
							<div class="col-sm-10">
								<input type="file" class="" name="file" />
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
