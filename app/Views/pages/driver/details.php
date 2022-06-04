<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details Driver</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Drivers</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/Driver"; ?>" class="btn btn-sm btn-success">Manage Driver</a>
					</div>
					<div class="py-5 bg-theme rounded mb-n5">
						<div class="py-4"></div>
					</div>
					<div class="card-body mt-n5">
						<div class="row">
							<div class="col-lg-6">
								<div class="card card-body border border-info rounded shadow">
									<h3 class="text-info text-theme"><?php echo $driver["name"]; ?></h3>
									<hr>
									<h6><i class="fas fa-phone mr-1 text-theme"></i> Phone:  <?php echo $driver["phone"]; ?></h6>
									<hr>
									<h6><i class="fas fa-home mr-1 text-theme"></i> Address: <?php echo $driver["address"]; ?></h6>
								</div>
								<hr />
								<h5 class="text-theme">Personal Details:-</h5>
								<table class="table table-striped">
									<tbody>
									<tr><td>Id:</td><td><?php echo $driver["id"]; ?></td></tr>
									<tr><td>Deth of Birth:</td><td><?php echo $driver["dob"]; ?></td></tr>
									<tr><td>Gender:</td><td><?php echo $driver["gender"]==0?"<i class=\"fas fa-mars mr-1 text-theme\"></i> Male":"<i class=\"fas fa-venus mr-1 text-theme\"></i> Female"; ?></td></tr>
									<tr><td>NID:</td><td><?php echo $driver["nid"]; ?></td></tr>
									<tr><td>Driving License No:</td><td><?php echo $driver["driving_license_no"]; ?></td></tr>
									<tr><td>License Issue Date:</td><td><?php echo $driver["license_issue_date"]; ?></td></tr>
									<tr><td>License Validity Date:</td><td><?php echo $driver["license_validity_date"]; ?></td></tr>
									</tbody>
								</table>
							</div>
							<div class="col-lg-6">
								<img src="<?php echo base_url()."/public/img/drivers/".$driver["photo"]; ?>" class="img-fluid border rounded shadow" />
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
