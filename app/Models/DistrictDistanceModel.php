<?php

namespace App\Models;

use CodeIgniter\Model;

class DistrictDistanceModel extends Model
{
	protected $table = "district_distances";
	protected $allowedFields = ['id','district','distance','factor'];
}
