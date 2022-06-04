<div class="sidebar shadow" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="active"> <a href="<?php echo base_url();?>/Home"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
				<li class="list-divider"></li>
				<li class="submenu"> <a href="#"><i class="fas fa-cog"></i> <span> System </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="<?php echo base_url();?>/User"> Manage User </a></li>
						<li><a href="edit-booking.html"> Manage Role </a></li>
					</ul>
				</li>
				<li class="submenu"> <a href="#"><i class="fas fa-car"></i> <span> Vehicle </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="<?php echo base_url();?>/Vehicle"> Manage Vehicle </a></li>
						<li><a href="<?php echo base_url();?>/Category"> Manage Category </a></li>
						<li><a href="<?php echo base_url();?>/FuelType"> Manage Fuel Type </a></li>
					</ul>
				</li>
				<li class=""> <a href="<?php echo base_url();?>/Driver"><i class="fas fa-user-circle"></i> <span>Driver</span></a> </li>
				<li class=""> <a href="<?php echo base_url();?>/Customer"><i class="fas fa-user-friends"></i> <span> Customer </span></a></li>
				<li class="submenu"> <a href="#"><i class="fas fa-bookmark"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="<?php echo base_url();?>/Booking/create"> Create Booking </a></li>
						<li><a href="<?php echo base_url();?>/Booking"> Manage Booking </a></li>
						<li><a href="<?php echo base_url();?>/BookingDetail"> Booking Details </a></li>
					</ul>
				</li>
				<li class=""> <a href="<?php echo base_url();?>/PriceType"><i class="fas fa-money-bill-wave"></i> <span> Price Type </span> </a></li>
				<li class=""> <a href="<?php echo base_url();?>/RideType"><i class="fas fa-truck"></i> <span> Ride Type </span> </a></li>	
				<li class=""> <a href="<?php echo base_url();?>/DistrictDistance"><i class="fas fa-map-marked-alt"></i> <span> District Distance </span> </a></li>				
			</ul>
			<div class="py-5"></div>
		</div>
	</div>
</div>