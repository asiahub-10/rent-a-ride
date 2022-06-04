<?php

namespace App\Models;

use CodeIgniter\Model;

class VehicleModel extends Model
{
	protected $table = "vehicles";
	protected $allowedFields = ['id','vehicle_license_no','manufacturer','model','model_year','category_id','photo','fuel_type_id','have_ac','factor'];
}
