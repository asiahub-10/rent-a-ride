<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Create Booking Detail</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Booking Details</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/BookingDetail"; ?>" class="btn btn-sm btn-success">Manage Booking Detail</a>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>/BookingDetail/save" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Booking</label>
							<div class="col-sm-10">
								<select name="cmbBooking" class="custom-select">
								<?php
									foreach ($bookings as $booking) {
										echo "<option value='{$booking["id"]}'>{$booking["name"]}</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Vehicle</label>
							<div class="col-sm-10">
								<select name="cmbVehicle" class="custom-select">
								<?php
									foreach ($vehicles as $vehicle) {
										echo "<option value='{$vehicle["id"]}'>{$vehicle["vehicle_license_no"]}</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Driver</label>
							<div class="col-sm-10">
								<select name="cmbDriver" class="custom-select">
								<?php
									foreach ($drivers as $driver) {
										echo "<option value='{$driver["id"]}'>{$driver["name"]}</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Ride_type</label>
							<div class="col-sm-10">
								<select name="cmbRideType" class="custom-select">
								<?php
									foreach ($ride_types as $ride_type) {
										echo "<option value='{$ride_type["id"]}'>{$ride_type["name"]}</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pickup date</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="PickupDate" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pickup time</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtPickupTime" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pickup location</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtPickupLocation" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Drop off location</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtDropOffLocation" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Distance</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtDistance" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Price_type</label>
							<div class="col-sm-10">
								<select name="cmbPriceType" class="custom-select">
								<?php
									foreach ($price_types as $price_type) {
										echo "<option value='{$price_type["id"]}'>{$price_type["name"]}</option>";
									}
								?>
								</select>
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
