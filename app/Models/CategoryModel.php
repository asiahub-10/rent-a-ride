<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
	protected $table = "categories";
	protected $allowedFields = ['id','name','passenger_capacity','luggage_capacity'];
}
