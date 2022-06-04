<?php

namespace App\Models;

use CodeIgniter\Model;

class DriverModel extends Model
{
	protected $table = "drivers";
	protected $allowedFields = ['id','name','dob','gender','phone','nid','address','driving_license_no','license_issue_date','license_validity_date','photo'];
}
