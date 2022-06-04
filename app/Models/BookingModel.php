<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
	protected $table = "bookings";
	protected $allowedFields = ['id','customer_id','order_date','order_total','paid_amount'];
}
