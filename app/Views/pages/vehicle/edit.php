<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Edit Vehicle</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Vehicles</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/vehicle"; ?>" class="btn btn-sm btn-success">Manage vehicle</a>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>/vehicle/update" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<input type="hidden" class="form-control" name="txtId" value="<?php echo $vehicle['id']; ?>" />
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Vehicle license no</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtVehicleLicenseNo" value="<?php echo $vehicle['vehicle_license_no']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Manufacturer</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtManufacturer" value="<?php echo $vehicle['manufacturer']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Model</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtModel" value="<?php echo $vehicle['model']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Model year</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtModelYear" value="<?php echo $vehicle['model_year']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Category</label>
							<div class="col-sm-10">
								<select name="cmbCategory" class="custom-select">
								<?php
									foreach ($categorys as $category) {
										if($category["id"]==$vehicle["category_id"]){
											echo "<option value='{$category["id"]}' selected>{$category["name"]}</option>";
										}else{
											echo "<option value='{$category["id"]}'>{$category["name"]}</option>";
										}
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Photo</label>
							<div class="col-sm-10">
								<input type="file" class="" name="file" />
								<img src="<?php echo base_url()."/public/img/vehicles/".$vehicle['photo']; ?>" width="100" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Fuel_type</label>
							<div class="col-sm-10">
								<select name="cmbFuelType" class="custom-select">
								<?php
									foreach ($fuel_types as $fuel_type) {
										if($fuel_type["id"]==$vehicle["fuel_type_id"]){
											echo "<option value='{$fuel_type["id"]}' selected>{$fuel_type["name"]}</option>";
										}else{
											echo "<option value='{$fuel_type["id"]}'>{$fuel_type["name"]}</option>";
										}
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Have ac</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtHaveAc" value="<?php echo $vehicle['have_ac']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Factor</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtFactor" value="<?php echo $vehicle['factor']; ?>" />
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
