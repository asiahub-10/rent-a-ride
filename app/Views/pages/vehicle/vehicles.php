<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Manage Vehicle</h3>
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
						<a href="<?php echo base_url()."/vehicle/create"; ?>" class="btn btn-sm btn-success">Create vehicle</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Photo</th>
									<th>Vehicle No. & ID</th>
									<th>Model</th>
									<th>Category & Fuel Type</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($vehicles as $row) {
								?>
								<tr>
									<td><img src="<?php echo base_url()."/public/img/vehicles/".$row['photo']; ?>" width="100" /> </td>
									<!-- <td><?php //echo $row['id']; ?></td> -->
									<td><?php echo $row['vehicle_license_no']."<br><b># ".$row['id']."</b>"; ?></td>
									<td><?php echo $row['model'].", ".$row['model_year']; ?></td>
									<td><?php echo $row['name']." <br><i> (".$row['fuel'].")</i>"; ?></td>
									<!-- <td><?php //echo $row['name']." <br><i> (".$row['fuel'].")</i>"; ?></td> -->
									<td>
										<div class="btn-group">
											<a href="<?php echo base_url()."/vehicle/details/".$row['id']; ?>" class="btn btn-sm btn-outline-success">Details</a>
											<a href="<?php echo base_url()."/vehicle/edit/".$row['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
											<a href="<?php echo base_url()."/vehicle/delete/".$row['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
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
