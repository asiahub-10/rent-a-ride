<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Manage Driver</h3>
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
						<a href="<?php echo base_url()."/Driver/create"; ?>" class="btn btn-sm btn-success">Create Driver</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($drivers as $row) {
								?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['gender']==0?"Male":"Female"; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['address']; ?></td>
									<td>
										<div class="btn-group">
											<a href="<?php echo base_url()."/Driver/details/".$row['id']; ?>" class="btn btn-sm btn-outline-success">Details</a>
											<a href="<?php echo base_url()."/Driver/edit/".$row['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
											<a href="<?php echo base_url()."/Driver/delete/".$row['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
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
