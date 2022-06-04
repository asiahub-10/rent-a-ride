<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = "users";
	protected $allowedFields = ['id','username','role_id','password','email','full_name','created_at','photo','verify_code','inactive','mobile'];


	// protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;


	// protected $returnType    = \App\Entities\User::class;

	// public function allUser() {
	// 	// $user = $this
	// 	// 	->select('u.*,r.name role')
	// 	// 	->from('users as u')
	// 	// 	->join('roles as r', 'r.id = u.role_id')
	// 	// 	->get();

	// 	$db      = \Config\Database::connect();
	// 	$builder = $db->table('users');
	// 	$builder->select('u.*,r.name role');
	// 	$builder->from('users as u');
	// 	$builder->join('roles as r', 'r.id = u.role_id');
	// 	$query = $builder->get();

	// 	return $query->getResultArray();
	// } 
}
