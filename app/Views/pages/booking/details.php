<style>
	@media print {
  body * {
    visibility: hidden;
  }
  #pdf, #pdf * {
    visibility: visible;
  }
  #pdf {
    position: absolute;
    left: 0 !important;
    top: 0 !important;
	width: 100%;
  }
}
</style>
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Details Booking</h3>
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
					<div id="pdf" class="card-body">
						<div class="d-flex align-items-end justify-content-between">
							<div class="d-flex align-items-center">
								<img src="<?php echo base_url() ?>/public/assets/img/logo.png" class="border shadow rounded-circle mr-3" width="50" alt="">
								<h3 class="text-theme font-weight-bold mb-0">RENT A RIDE</h3>
							</div>
							<div class="text-right">
								<h4>CAR RENTAL</h4>
								<H2>INVOICE</H2>
							</div>
						</div>
						<hr class="pt-1 bg-secondary my-4">
						<div class="d-flex justify-content-between align-items-start pb-3">
							<div class="text-secondary">
								<h6 class="text-theme font-weight-bold">Company Info:</h6>
								102/B-1 Motijheel C/A <br>
								Dhaka, Bangladesh <br>
								Phone: 01656554645 <br>
								Email: rar@info.bd
							</div>
							<div class="text-right text-secondary">
								<h6 class="text-theme font-weight-bold">Customer Info:</h6>
								Name: <?php echo $booking["name"]; ?> <br>
								Phone: <?php echo $booking["phone"]; ?> 
								<br><br>
								<h6 class="text-theme font-weight-bold">Other Info:</h6>
								Order Date: <?php $time = strtotime($booking["order_date"]);
											echo date("m/d/y g:i A", $time); ?> <br>
							</div>
						</div>
						<div class="table-responsive my-4 mt-5">
								<table class="table table-striped">
									<thead class="bg-secondary text-white border-bottom">
										<tr>
											<th>SN</th>
											<th>Vehicle & Driver</th>
											<th>Pickup & Drop Off</th>
											<th>Service Type</th>
											<th class="text-right">Line total</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$sl=1;
										// foreach($bookingDetails as $row){
										foreach($bookingDetailJoin as $row){
									?>
										<tr>
											<td><?php echo $sl++; ?></td>
											<td>
												<span class="text-theme"><b><?php echo $row["category"]; ?></b></span>
												<br>
												<?php echo $row["model"]; ?>, <?php echo $row["vehicle"]; ?>
												<br>
												<b>Driver:</b> <?php echo $row["driver"]; ?>
											</td>
											<td>
												<!-- <b>On:</b> <?php //echo $row["pickup_date"].", ".$row["pickup_time"]; ?> -->
												<b>On:</b> <?php $timestamp = strtotime($row["pickup_time"]);

												 echo $row["pickup_date"].", ".date("h.i A", $timestamp); ?>
												<br>
												<b>From:</b> <?php echo $row["pickup_location"]; ?>
												<br>
												<b>To:</b> <?php echo $row["drop_off_location"]; ?>
											</td>
											<td>												
												<?php echo $row["ride_type"]; ?>, 
												<br>
												<?php echo $row["price_type"]; ?> Rate
											</td>
											<td class="text-right">
												<?php
													$carFactor= $row["factor"];
													$row["distance"]!=""?$row["distance"]:$row["distance"]=1;
													$distance=$row["distance"];

													if($row["fuel_type_id"]==1){
														$fuel=1.24;
													}elseif($row["fuel_type_id"]==2){
														$fuel=0.95;
													}elseif($row["fuel_type_id"]==3){
														$fuel=0.40;
													}
													
													if($row["ride_type_id"]==1){
														$ride=1.2;
													}elseif($row["ride_type_id"]==2){
														$ride=2;
													}
											
													if($row["price_type_id"]==1){
														$totalPrice=$carFactor*50*$distance*$fuel*$ride;
													}elseif($row["price_type_id"]==2){
														$totalPrice=$carFactor*400*$fuel;
													}
													echo round($totalPrice);
												?>
											</td>
										</tr>
									<?php
										}
									?>
									</tbody>
									<tfoot>
										<tr>
											<th colspan="3" class="border-0"></th>
											<th class="text-right">Paid amount</th>
											<th class="text-right"><b><?php echo $booking["paid_amount"]; ?></b></th>
										</tr>
										<tr>
											<th colspan="3" class="border-0"></th>
											<th class="text-right">Due amount</th>
											<th class="text-right"><b><?php echo $booking["order_total"]-$booking["paid_amount"]; ?></b></th>
										</tr>
										<tr>
											<th colspan="3" class="border-0"></th>
											<th class="text-right bg-secondary text-white">Order Total</th>
											<th class="text-right bg-secondary text-white"><b><?php echo $booking["order_total"]; ?></b></th>
										</tr>
									</tfoot>
								</table>
							</div>
						<?php
							// foreach($d as $row){
							// 	echo $row['driver'];
							// }
							// print_r($booking);
							// print_r($bookingDetails);
						?>
					</div>
					<div class="card-footer border-top mt-5">
						<button type="button" class="btn btn-info" onclick="printDiv('pdf')" >Print Invoice <i class="fas fa-print ml-1"></i></button>
						<button class="btn btn-outline-info" class="html2PdfConverter" onclick="createPDF()">Download Invoice <i class="fas fa-download ml-1"></i></button>
					</div>
				</div>
				<!-- <button onclick="window.print()">print div</button> -->
			</div>
		</div>
	</div>

	<script src="https://cdn.bootcss.com/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
	<script>
		function createPDF() {
            var element = document.getElementById('pdf');
            html2pdf(element, {
                margin:1,
                padding:0,
                filename: 'invoice.pdf',
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale: 2,  logging: true },
                jsPDF: { unit: 'in', format: 'A2', orientation: 'P' },
                class: createPDF
            });
        };
		function printDiv(divName) {
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
		}
	</script>
