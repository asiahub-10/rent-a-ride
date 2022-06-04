<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details Booking Detail</h3>
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
					<div class="card-body">
						<table class="table table-striped">
							<tbody>
							<tr><th>Id</th><td><?php echo $booking_detail["id"]; ?></td></tr>
							<tr><th>Booking Id</th><td><?php echo $booking_detail["booking_id"]; ?></td></tr>
							<tr><th>Vehicle Id</th><td><?php echo $booking_detail["vehicle_id"]; ?></td></tr>
							<tr><th>Driver Id</th><td><?php echo $booking_detail["driver_id"]; ?></td></tr>
							<tr><th>Ride Type Id</th><td><?php echo $booking_detail["ride_type_id"]; ?></td></tr>
							<tr><th>Pickup Date</th><td><?php echo $booking_detail["pickup_date"]; ?></td></tr>
							<tr><th>Pickup Time</th><td><?php echo $booking_detail["pickup_time"]; ?></td></tr>
							<tr><th>Pickup Location</th><td><?php echo $booking_detail["pickup_location"]; ?></td></tr>
							<tr><th>Drop Off Location</th><td><?php echo $booking_detail["drop_off_location"]; ?></td></tr>
							<tr><th>Distance</th><td><?php echo $booking_detail["distance"]; ?></td></tr>
							<tr><th>Price Type Id</th><td><?php echo $booking_detail["price_type_id"]; ?></td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
