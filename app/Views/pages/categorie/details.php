<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details Categorie</h3>
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
						<a href="<?php echo base_url()."/category"; ?>" class="btn btn-sm btn-success">Manage categorie</a>
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<tbody>
							<tr><th>Id</th><td><?php echo $categorie["id"]; ?></td></tr>
							<tr><th>Name</th><td><?php echo $categorie["name"]; ?></td></tr>
							<tr><th>Passenger Capacity</th><td><?php echo $categorie["passenger_capacity"]; ?></td></tr>
							<tr><th>Luggage Capacity</th><td><?php echo $categorie["luggage_capacity"]; ?></td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
