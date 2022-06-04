<?php

namespace App\Models;

use CodeIgniter\Model;

class PriceTypeModel extends Model
{
	protected $table = "price_types";
	protected $allowedFields = ['id','name'];
}
