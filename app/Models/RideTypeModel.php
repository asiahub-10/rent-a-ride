<?php

namespace App\Models;

use CodeIgniter\Model;

class RideTypeModel extends Model
{
	protected $table = "ride_types";
	protected $allowedFields = ['id','name'];
}
