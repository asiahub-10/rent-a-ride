<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Manage User</h3>
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
						<a href="<?php echo base_url()."/user/create"; ?>" class="btn btn-sm btn-success">Create user</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<!-- <th>Id</th> -->
									<th>User</th>
									<th>Role</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($users as $row) {
								?>
								<tr>
									<!-- <td><?php //echo $row['id']; ?></td> -->
									<td>
										<div class="d-flex align-items-center">
											<img src="<?php echo base_url()."/public/img/users/".$row['photo']; ?>" width="50" class="mr-2 rounded-circle border shadow" /> 
											<div>
												<span class="font-weight-bold"><?php echo $row['username']; ?></span>
												<br>
												# <?php echo $row['id']; ?>
											</div>
										</div>
										
									</td>
									<td><?php echo $row['role']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<!-- <td><img src="<?php //echo base_url()."/public/img/users/".$row['photo']; ?>" width="100" /> </td> -->
									<td><?php echo $row['mobile']; ?></td>
									<td>
										<div class="btn-group">
											<a href="<?php echo base_url()."/user/details/".$row['id']; ?>" class="btn btn-sm btn-outline-success">Details</a>
											<a href="<?php echo base_url()."/user/edit/".$row['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
											<a href="<?php echo base_url()."/user/delete/".$row['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
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