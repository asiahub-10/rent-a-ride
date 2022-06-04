<?php

namespace App\Models;

use CodeIgniter\Model;

class FuelTypeModel extends Model
{
	protected $table = "fuel_types";
	protected $allowedFields = ['id','name'];
}
