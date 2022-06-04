<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Manage Category</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Ctegories</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/category/create"; ?>" class="btn btn-success">Create Category</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Passenger Capacity</th>
									<th>Luggage Capacity</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($categories as $row) {
								?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['passenger_capacity']; ?></td>
									<td><?php echo $row['luggage_capacity']; ?></td>
									<td>
										<div class="btn-group">
											<a href="<?php echo base_url()."/category/details/".$row['id']; ?>" class="btn btn-sm btn-outline-success">Details</a>
											<a href="<?php echo base_url()."/category/edit/".$row['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
											<a href="<?php echo base_url()."/category/delete/".$row['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
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
