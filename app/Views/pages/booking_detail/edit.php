<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Edit Booking Detail</h3>
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
					<form class="form-horizontal" action="<?php echo base_url(); ?>/BookingDetail/update" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<input type="hidden" class="form-control" name="txtId" value="<?php echo $booking_detail['id']; ?>" />
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Booking</label>
							<div class="col-sm-10">
								<select name="cmbBooking" class="custom-select">
								<?php
									foreach ($BookingDetails as $BookingDetail) {
										if($BookingDetail["id"]==$booking_detail["booking_id"]){
											echo "<option value='{$BookingDetail["id"]}' selected>{$BookingDetail["name"]}</option>";
										}else{
											echo "<option value='{$BookingDetail["id"]}'>{$BookingDetail["name"]}</option>";
										}
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
									foreach ($BookingDetails as $BookingDetail) {
										if($BookingDetail["id"]==$booking_detail["vehicle_id"]){
											echo "<option value='{$BookingDetail["id"]}' selected>{$BookingDetail["name"]}</option>";
										}else{
											echo "<option value='{$BookingDetail["id"]}'>{$BookingDetail["name"]}</option>";
										}
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
									foreach ($BookingDetails as $BookingDetail) {
										if($BookingDetail["id"]==$booking_detail["driver_id"]){
											echo "<option value='{$BookingDetail["id"]}' selected>{$BookingDetail["name"]}</option>";
										}else{
											echo "<option value='{$BookingDetail["id"]}'>{$BookingDetail["name"]}</option>";
										}
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
									foreach ($BookingDetails as $BookingDetail) {
										if($BookingDetail["id"]==$booking_detail["ride_type_id"]){
											echo "<option value='{$BookingDetail["id"]}' selected>{$BookingDetail["name"]}</option>";
										}else{
											echo "<option value='{$BookingDetail["id"]}'>{$BookingDetail["name"]}</option>";
										}
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pickup date</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="PickupDate" value="<?php echo $booking_detail['pickup_date']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pickup time</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtPickupTime" value="<?php echo $booking_detail['pickup_time']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pickup location</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtPickupLocation" value="<?php echo $booking_detail['pickup_location']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Drop off location</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtDropOffLocation" value="<?php echo $booking_detail['drop_off_location']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Distance</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtDistance" value="<?php echo $booking_detail['distance']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Price_type</label>
							<div class="col-sm-10">
								<select name="cmbPriceType" class="custom-select">
								<?php
									foreach ($BookingDetails as $BookingDetail) {
										if($BookingDetail["id"]==$booking_detail["price_type_id"]){
											echo "<option value='{$BookingDetail["id"]}' selected>{$BookingDetail["name"]}</option>";
										}else{
											echo "<option value='{$BookingDetail["id"]}'>{$BookingDetail["name"]}</option>";
										}
									}
								?>
								</select>
							</div>
						</div>
					</div>
					<div class="card-footer border-top text-right">
						<button type="submit" class="btn btn-sm btn-info me-2"><i class="fas fa-save mr-1"></i> Save Change</button>
						<button type="submit" class="btn btn-sm btn-dark float-right">Cancel</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
