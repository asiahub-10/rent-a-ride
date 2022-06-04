<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12 mt-5">
					<h3 class="page-title mt-3">Create Booking</h3>
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
						<a href="<?php echo base_url() . "/Booking"; ?>" class="btn btn-sm btn-success">Manage Booking</a>
					</div>
					<!-- <form class="form-horizontal" action="<?php echo base_url(); ?>/Booking/save" enctype="multipart/form-data" method="post"> -->
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<label class="col-form-label">Customer</label>
									<select name="cmbCustomer" id="cmbCustomer" class="custom-select">
										<?php
										foreach ($customers as $customer) {
											echo "<option value='{$customer["id"]}'>{$customer["name"]}</option>";
										}
										?>
									</select>
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Order date</label>
									<input type="text" class="form-control" name="txtOrderDate" id="txtOrderDate" />
								</div>
							</div>
							<hr>
							<div class="card-body border border-info rounded mb-3">
								<!-- <div class="form-group row">
							<label class="col-sm-2 col-form-label">Booking</label>
							<div class="col-sm-10">
								<select name="cmbBooking" class="custom-select">
								<?php
								foreach ($bookings as $booking) {
									//echo "<option value='{$booking["id"]}'>{$booking["name"]}</option>";
								}
								?>
								</select>
							</div>
						</div> -->
								<div class="row">
									<div class="col-md-6">
										<label class="col-form-label">Category</label>
										<select name="cmbCategory" id="category" class="custom-select">
											<?php
											foreach ($categories as $category) {
												echo "<option value='{$category["id"]}'>{$category["name"]}</option>";
											}
											?>
										</select>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Vehicle</label>
										<select name="cmbVehicle" id="vehicle" class="custom-select">
											<option value=''>Select vehicle</option>
											<?php
											foreach ($vehicles as $vehicle) {
												//echo "<option value='{$vehicle["id"]}'>{$vehicle["model"]}, {$vehicle["vehicle_license_no"]}</option>";
											}
											?>
										</select>
									</div>
									<div class="col-md-12">
										<label class="col-form-label">Driver</label>
										<select name="cmbDriver" id="driver" class="custom-select">
											<?php
											foreach ($drivers as $driver) {
												echo "<option value='{$driver["id"]}'>{$driver["name"]}</option>";
											}
											?>
										</select>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Ride_type</label>
										<select name="cmbRideType" id="rideType" class="custom-select">
											<?php
											foreach ($ride_types as $ride_type) {
												echo "<option value='{$ride_type["id"]}'>{$ride_type["name"]}</option>";
											}
											?>
										</select>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Price_type</label>
										<select name="cmbPriceType" id="priceType" class="custom-select">
											<?php
											foreach ($price_types as $price_type) {
												echo "<option value='{$price_type["id"]}'>{$price_type["name"]}</option>";
											}
											?>
										</select>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Pickup Date</label>
										<div class="">
											<input type="date" id="pickupDate" class="form-control" name="PickupDate" />
										</div>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Pickup Time</label>
										<div class="">
											<input type="time" id="pickupTime" class="form-control" name="txtPickupTime" />
										</div>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Pickup location</label>
										<div class="">
											<input type="text" id="pickupLocation" class="form-control" name="txtPickupLocation" />
										</div>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Drop off location</label>
										<div class="">
											<input type="text" id="dropOffLocation" class="form-control" name="txtDropOffLocation" />
										</div>
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Distance</label>
										<div class="">
											<input type="text" class="form-control" id="distance" name="txtDistance" />
										</div>
									</div>
									<div class="col-md-6 text-right">
										<!-- <a href="#" id="priceCal" class="btn btn-sm btn-outline-info mt-5">Calculate Price</a> -->
										<a href="#" id="btnAddToCart" class="btn btn-sm btn-outline-info mt-5">Book Now</a>
									</div>
								</div>
							</div>
							<div class="table-responsive mb-4">
								<table class="table table-striped">
									<thead class="table-info border-bottom">
										<tr>
											<th>SN</th>
											<th>Vehicle & Driver</th>
											<th>Pickup & Drop Off</th>
											<th>Service Type</th>
											<th class="text-right">Subtotal</th>
											<th class="text-right"><input type="button" id="clearAll" class="btn btn-sm btn-outline-danger" value="Clear" /></th>
										</tr>
									</thead>
									<tbody id="items">
									
									</tbody>
								</table>
							</div>
							<div class="row">								
								<div class="col-md-4">
									<label class="col-form-label">Paid amount</label>
									<input type="text" class="form-control" name="txtPaidAmount" id="paidAmount" />
								</div>
								<div class="col-md-4">
									<label class="col-form-label">Payment Due</label>
									<input type="text" class="form-control"  id="duePayment" readonly />
								</div>
								<div class="col-md-4">
									<label class="col-form-label">Order total</label>
									<input type="text" class="form-control" name="txtOrderTotal" id="orderTotal" readonly />
								</div>
							</div>
						</div>
						<div class="card-footer border-top">
							<button id="btnProcessBook" class="btn btn-sm btn-info"><i class="fas fa-save mr-1"></i> Save Change</button>
							<button type="submit" class="btn btn-sm btn-dark float-right">Cancel</button>
						</div>
					<!-- </form> -->
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function() {			

			const cart = new Cart("book");
			
			printCart();
			// alert()

			getVehicles();

			let date = new Date();
            $("#txtOrderDate").val(date.toISOString().slice(0, 19).replace('T', ' '));

			//Show calander in textbox
			// $("#txtOrderDate").datepicker({
			// 	dateFormat: 'dd-mm-yy'
			// });

			//Save into database table
			$("#btnProcessBook").on("click", function() {

				let customer_id = $("#cmbCustomer").val();
				let order_date = $("#txtOrderDate").val();
				let order_total = $("#orderTotal").val();				
				let paid_amount = $("#paidAmount").val();
				// alert(customer_id)				

				let bookings = cart.getCart();
				// console.log(bookings);
				$.ajax({
					url: 'saveBooking',
					type: 'POST',
					data: {
						"customer_id": customer_id,
						"order_date": order_date,
						"order_total": order_total,
						"paid_amount": paid_amount,
						"bookings": bookings
					},
					success: function(res) {
						console.log(res);
						cart.clearCart();
						$("#items").html("");
						$("#orderTotal").val(0);
						$("#paidAmount").val(0);
						$("#duePayment").val(0);
					}
				});

			});

			//Show vehicle
			$("#category").on("change", function() {
				// $category = $(this).val();
				getVehicles()

			}); // 

			function getVehicles(){
				
				$.ajax({
					url: 'categorizedVehical',
					type: 'POST',
					data: {
						"category_id": $("#category").val()
					},
					success: function(res) {
						// console.log(res.vehicles);
						let data = res.vehicles;
						let option = "";
						data.forEach(function(item,index){
							option += `<option value='${item.id}'>${item.model}, ${item.vehicle_license_no}</option>`;
						});
						$("#vehicle").html(option);
					}
				});
			}     

			//Add item to bill temporarily
			$("#btnAddToCart").on("click", function() {
				let item_id = $("#vehicle").val();
				let name = $("#vehicle option:selected").text();
				let category = $("#category option:selected").text();
				let driver_id = $("#driver").val();
				let driver_name = $("#driver option:selected").text();

				let pickupDate = $("#pickupDate").val();
				let pickupTime = $("#pickupTime").val();
				let pickupLocation = $("#pickupLocation").val();
				let dropOffLocation = $("#dropOffLocation").val();

				// let vehicle = $("#vehicle").val();
				let priceType = $("#priceType").val();
				let priceType_name = $("#priceType option:selected").text();
				let rideType = $("#rideType").val();
				let rideType_name = $("#rideType option:selected").text();
				let distance = $("#distance").val();
				let amount = "";
				let qty = 1;

				$.ajax({
					url: "orderTotal",
					type: "POST",
					data: {
						'vehicle': item_id,
						'priceType': priceType,
						'rideType': rideType,
						'distance': distance
					},
					success: function(res) {
						subtotal = res.amount;
						distance = res.distance;
						// console.log(amount+"-"+distance);

						let item = {
							"item_id": item_id,
							"name": name,
							"category": category,
							"driver_id": driver_id,
							"driver_name": driver_name,
							"pickupDate": pickupDate,
							"pickupTime": pickupTime,
							"pickupLocation": pickupLocation,
							"dropOffLocation": dropOffLocation,
							"priceType": priceType,
							"priceType_name": priceType_name,
							"rideType": rideType,
							"rideType_name": rideType_name,
							"qty": qty,
							'distance': distance,
							"subtotal": subtotal
						};

						cart.save(item);

						printCart();
					}
				});

			});

			$("body").on("click", ".delete", function() {
				let id = $(this).data("id");
				cart.delItem(id)
				printCart();
			});

			$("#clearAll").on("click", function() {
				cart.clearCart();
				printCart();
			});


			//------------------Cart Functions----------//   
			function printCart() {

				let bookings = cart.getCart();
				let sn = 1;
				let $bill = "";
				let subtotal = 0;

				if (bookings != null) {

					bookings.forEach(function(item, i) {
						//console.log(item.name);
						subtotal += item.subtotal;
						let $html = "<tr>";
						$html += "<td>";
						$html += sn;
						$html += "</td>";
						$html += "<td>";
						$html += "<span class='text-theme font-weight-bold'>"+item.category+"</span><br>"+item.name+"<br><b>Driver:</b> "+item.driver_name;
						$html += "</td>";
						$html += "<td>";
						$html += "<b>On:</b> <span>"+item.pickupDate+", "+item.pickupTime+"</span><br><b>From:</b> <span>"+item.pickupLocation+"</span><br><b>To:</b> "+item.dropOffLocation;
						$html += "</td>";
						$html += "<td>";
						$html += item.rideType_name+", <br>"+item.priceType_name+" Rate";
						$html += "</td>";
						$html += "<td data-field='subtotal' class='text-right'>";
						$html += item.subtotal.toFixed();
						$html += "</td>";
						$html += "<td class='text-right'>";
						$html += "<input type='button' class='delete btn btn-sm btn-white text-danger' data-id='" + item.item_id + "' value='X'/>";
						$html += "</td>";
						$html += "</tr>";
						$bill += $html;
						sn++;
					});
				}

				$("#items").html($bill);

				//Order Summary
				$("#orderTotal").val(subtotal.toFixed());
				if($("#orderTotal").val()==0) $("#paidAmount").val(0);
				let paid = $("#paidAmount").val();
				if(paid=="") paid=0;
				$("#duePayment").val(subtotal.toFixed()-paid);
				// let tax = (subtotal * 0.05).toFixed(2);
				// $("#tax").html(tax);
				// $("#net-total").html(parseFloat(subtotal) + parseFloat(tax));
			}

			$("#paidAmount").on("keyup",function(){
				let total = $("#orderTotal").val();
				let paid = $("#paidAmount").val();
				if(paid=="") paid=0;
				if(total=="") total=0;
				$("#duePayment").val(total-paid);
			});


		});
	</script>
	<script src="<?php echo base_url() ?>/public/assets/js/cart.js"></script>