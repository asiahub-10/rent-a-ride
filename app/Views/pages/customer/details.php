<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details Customer</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Customers</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/Customer"; ?>" class="btn btn-sm btn-success">Manage Customer</a>
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<tbody>
							<tr><th>Id</th><td><?php echo $customer["id"]; ?></td></tr>
							<tr><th>Name</th><td><?php echo $customer["name"]; ?></td></tr>
							<tr><th>Phone</th><td><?php echo $customer["phone"]; ?></td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
