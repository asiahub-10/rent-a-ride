<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingDetailModel extends Model
{
	protected $table = "booking_details";
	protected $allowedFields = ['id','booking_id','vehicle_id','driver_id','ride_type_id','pickup_date','pickup_time','pickup_location','drop_off_location','distance','price_type_id'];
}
