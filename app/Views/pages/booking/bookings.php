<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Manage Booking</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Bookings</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/Booking/create"; ?>" class="btn btn-sm btn-success">Create Booking</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Id</th>
									<th>Customer</th>
									<th>Order Date</th>
									<th>Order Total</th>
									<th>Paid Amount</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($bookings as $row) {
								?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><a href="<?php echo base_url().'/Customer/details/'.$row['customer_id'] ?>"><?php echo $row['name']; ?></a></td>
									<td>
										<?php 
											// echo $row['order_date'];
											$time = strtotime($row['order_date']);
											echo date("m/d/y g:i A", $time); 
										?>
									</td>
									<td><?php echo $row['order_total']; ?></td>
									<td><?php echo $row['paid_amount']; ?></td>
									<td>
										<div class="btn-group">
											<a href="<?php echo base_url()."/Booking/details/".$row['id']; ?>" class="btn btn-sm btn-outline-success">Details</a>
											<a href="<?php echo base_url()."/Booking/edit/".$row['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
											<a href="<?php echo base_url()."/Booking/delete/".$row['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
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
