<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Edit Booking</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url()."/Home"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Bookings</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header border-bottom">
						<a href="<?php echo base_url()."/Booking"; ?>" class="btn btn-sm btn-success">Manage Booking</a>
					</div>
					<form class="form-horizontal" action="<?php echo base_url(); ?>/Booking/update" enctype="multipart/form-data" method="post">
					<div class="card-body">
						<input type="hidden" class="form-control" name="txtId" value="<?php echo $booking['id']; ?>" />
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Customer</label>
							<div class="col-sm-10">
								<select name="cmbCustomer" class="custom-select">
								<?php
									foreach ($Bookings as $Booking) {
										if($Booking["id"]==$booking["customer_id"]){
											echo "<option value='{$Booking["id"]}' selected>{$Booking["name"]}</option>";
										}else{
											echo "<option value='{$Booking["id"]}'>{$Booking["name"]}</option>";
										}
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Order date</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtOrderDate" value="<?php echo $booking['order_date']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Order total</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtOrderTotal" value="<?php echo $booking['order_total']; ?>" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Paid amount</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtPaidAmount" value="<?php echo $booking['paid_amount']; ?>" />
							</div>
						</div>
					</div>
					<div class="card-footer border-top">
						<button type="submit" class="btn btn-sm btn-info"><i class="fas fa-save mr-1"></i> Save Change</button>
						<button type="submit" class="btn btn-sm btn-dark float-right">Cancel</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
