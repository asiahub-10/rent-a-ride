<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Create User</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Users</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/user"; ?>" class="btn btn-sm btn-success">Manage user</a>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>/user/save" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtUsername" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Role</label>
							<div class="col-sm-10">
								<select name="cmbRole" class="custom-select">
								<?php
									foreach ($roles as $role) {
										echo "<option value='{$role["id"]}'>{$role["name"]}</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="txtPassword" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtEmail" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Full name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtFullName" />
							</div>
						</div>
						<!-- <div class="form-group row">
							<label class="col-sm-2 col-form-label">Created at</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="createdAt" />
							</div>
						</div> -->
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Photo</label>
							<div class="col-sm-10">
								<input type="file" class="" name="file" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Verify code</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtVerifyCode" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Inactive</label>
							<div class="col-sm-10">
								<input type="checkbox" class="" name="chkInactive" value="1" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Mobile</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtMobile" />
							</div>
						</div>
					</div>
					<div class="card-footer border-top">
						<button type="submit" class="btn btn-sm btn-info"><i class="fas fa-save mr-1"></i> Save Change</button>
						<button type="submit" class="btn btn-sm btn-muted float-right">Cancel</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
