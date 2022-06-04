<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details User</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url() . "/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Users</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url() . "/user"; ?>" class="btn btn-sm btn-success">Manage user</a>
					</div>
				</div>
				<section class="">
					<div class="py-5 bg-theme rounded border">
						<div class="pt-5 pb-4 mb-n5"></div>
					</div>
					<div class="container">
						<div class="row mt-n5">
							<div class="col-lg-3 col-md-4 col-sm-5">
								<div class="card mb-3 rounded bg-transparent">
									<div class="">
										<img src="<?php echo base_url() . "/public/img/users/" . $user["photo"]; ?>" class="card-img rounded-circle" />
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-8 col-sm-7">
								<div class="card mb-3 shadow rounded">
									<div class="card-body">
										<h3 class="text-theme"><?php echo $user["username"]; ?></h3>
										<h6 class="text-secondary"><?php echo $user["role"]; ?></h6>
										<hr>
										<table class="table table-striped">
											<tbody>
												<tr>
													<th>Id</th>
													<td><?php echo $user["id"]; ?></td>
												</tr>
												<tr>
													<th>Full Name</th>
													<td><?php echo $user["full_name"]; ?></td>
												</tr>
												<tr>
													<th>Mobile</th>
													<td><?php echo $user["mobile"]; ?></td>
												</tr>
												<tr>
													<th>Email</th>
													<td><?php echo $user["email"]; ?></td>
												</tr>
												<tr>
													<th>Created At</th>
													<td><?php echo $user["created_at"]; ?></td>
												</tr>
												<tr>
													<th>Verify Code</th>
													<td><?php echo $user["verify_code"]; ?></td>
												</tr>
												<tr>
													<th>Inactive</th>
													<td><?php echo $user["inactive"]; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>