<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
	protected $table = "roles";
	protected $allowedFields = ['id','name'];
}
