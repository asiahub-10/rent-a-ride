<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details Vehicle</h3>
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
						<a href="<?php echo base_url()."/vehicle"; ?>" class="btn btn-sm btn-success">Manage vehicle</a>
					</div>
					<div class="py-5 bg-theme rounded mb-n5">
						<div class="py-4"></div>
					</div>
					<div class="card-body mt-n5">
						<div class="row">							
							<div class="col-lg-6">
								<img src="<?php echo base_url()."/public/img/vehicles/".$vehicle["photo"]; ?>" class="img-fluid border rounded shadow" />
							</div>
							<div class="col-lg-6">
								<div class="card card-body border border-info rounded shadow">
									<h3 class="text-info text-theme"><?php echo $vehicle["vehicle_license_no"]; ?></h3>
									<!-- <hr> -->
									<h4><i class="fas fa-car-side mr-1 text-theme"></i> <?php echo $vehicle["model"]; ?>, <?php echo $vehicle["model_year"]; ?></h4>
								</div>
								<hr />
								<h5 class="text-theme">Vehical Details:-</h5>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>											
												<div class="d-flex align-items-center">
													<i class="fas fa-car fa-2x mr-3 text-secondary"></i>
													<div>
													<span><strong>Category:</strong></span> <br> <?php echo $vehicle["name"]; ?>
													</div>
												</div>												 
											</td>
											<td>											
												<div class="d-flex align-items-center">
													<i class="far fa-bookmark fa-2x mr-3 text-secondary"></i>
													<div>
													<span><strong>Manufacturer:</strong></span> <br> <?php echo $vehicle["manufacturer"]; ?>
													</div>
												</div>												 
											</td>											
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<i class="fas fa-user-friends fa-2x mr-3 text-secondary"></i>
													<div>
													<span><strong>Passenger:</strong></span> <br> <?php echo $vehicle["passenger_capacity"]; ?>
													</div>
												</div>												 
											</td>
											<td>
												<div class="d-flex align-items-center">
													<i class="fas fa-luggage-cart fa-2x mr-3 text-secondary"></i>
													<div>
													<span><strong>Luggage:</strong></span> <br> <?php echo $vehicle["luggage_capacity"]; ?>
													</div>
												</div>												 
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<i class="fas fa-gas-pump fa-2x mr-3 text-secondary"></i>
													<div>
													<span><strong>Fuel Type:</strong></span> <br> <?php echo $vehicle["fuel"]; ?>
													</div>
												</div>												 
											</td>
											<td>
												<div class="d-flex align-items-center">
													<i class="fas fa-wind fa-2x mr-3 text-secondary"></i>
													<div>
													<span><strong>Air Conditioner:</strong></span> <br> <?php echo $vehicle["have_ac"]==1?"YES":"NO"; ?>
													</div>
												</div>												 
											</td>
										</tr>
										<tr>
											<td colspan="2" class="">
												<i class="fas fa-circle mr-1"></i>
												<span><strong>Factor: <?php echo $vehicle["factor"]; ?></strong></span> 											 
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
