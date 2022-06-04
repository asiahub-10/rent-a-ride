<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Manage Booking Detail</h3>
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
						<a href="<?php echo base_url()."/BookingDetail/create"; ?>" class="btn btn-sm btn-success">Create Booking Detail</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Id</th>
									<th>Booking Id</th>
									<th>Vehicle Id</th>
									<th>Driver Id</th>
									<th>Ride Type Id</th>
									<th>Pickup Date</th>
									<th>Pickup Time</th>
									<th>Pickup Location</th>
									<th>Drop Off Location</th>
									<th>Distance</th>
									<th>Price Type Id</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($bookingDetails as $row) {
								?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['booking_id']; ?></td>
									<td><?php echo $row['vehicle_id']; ?></td>
									<td><?php echo $row['driver_id']; ?></td>
									<td><?php echo $row['ride_type_id']; ?></td>
									<td><?php echo $row['pickup_date']; ?></td>
									<td><?php echo $row['pickup_time']; ?></td>
									<td><?php echo $row['pickup_location']; ?></td>
									<td><?php echo $row['drop_off_location']; ?></td>
									<td><?php echo $row['distance']; ?></td>
									<td><?php echo $row['price_type_id']; ?></td>
									<td>
										<div class="btn-group">
											<a href="<?php echo base_url()."/BookingDetail/details/".$row['id']; ?>" class="btn btn-sm btn-outline-success">Details</a>
											<a href="<?php echo base_url()."/BookingDetail/edit/".$row['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
											<a href="<?php echo base_url()."/BookingDetail/delete/".$row['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
										</div>
									</td>
								</tr>
								<?php
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer border-top">
					<?php echo $pager->links(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
