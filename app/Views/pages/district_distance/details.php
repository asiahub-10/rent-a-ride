<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details District Distance</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">District Distances</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/DistrictDistance"; ?>" class="btn btn-sm btn-success">Manage District Distance</a>
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<tbody>
							<tr><th>Id</th><td><?php echo $district_distance["id"]; ?></td></tr>
							<tr><th>District</th><td><?php echo $district_distance["district"]; ?></td></tr>
							<tr><th>Distance (km)</th><td><?php echo $district_distance["distance"]; ?></td></tr>
							<tr><th>Factor</th><td><?php echo $district_distance["factor"]; ?></td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
