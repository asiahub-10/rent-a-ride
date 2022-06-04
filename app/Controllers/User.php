<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		echo view("layout/header");
		echo view("layout/navbar");
		echo view("layout/sidebar");

		$userModel = new \App\Models\UserModel();
		// $users = model('App\Models\UserModel');

		// $u=$users->allUser();

		// $db      = \Config\Database::connect();
		// $builder = $db->table('users');
		// $builder->select('u.*,r.name role');
		// $builder->from('users as u');
		// $builder->join('roles as r', 'r.id = u.role_id');
		// $query = $builder->get();


		// print_r($query->getResult());
		// print_r($users->pagination(10));
		// print_r($u);

		$users=$userModel->select('users.*,roles.name role')->join('roles', 'roles.id = users.role_id');


		echo view("pages/user/users",["users"=>$users->paginate(10),"pager"=>$users->pager]);
		// echo view("pages/user/users",["users"=>$u->paginate(10),"pager"=>$users->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$user = new \App\Models\UserModel();
		$user->delete($id);
		return redirect()->to('/user');
	}

	function details($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		echo view("layout/header");
		echo view("layout/navbar");
		echo view("layout/sidebar");

		$userModel = new \App\Models\UserModel();
		$user=$userModel->select('users.*,roles.name role')->join('roles', 'roles.id = users.role_id');
		// $user_row=$user->find($id);
		// echo view("pages/user/details",["user"=>$user->find($id)]);
		echo view("pages/user/details",["user"=>$user->find($id)]);
		echo view("layout/footer");
	}

	function edit($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		echo view("layout/header");
		echo view("layout/navbar");
		echo view("layout/sidebar");

		$user = new \App\Models\UserModel();
		$roles = new \App\Models\RoleModel();
		echo view("pages/user/edit",["user"=>$user->find($id), "roles"=>$roles->findAll()]);
		echo view("layout/footer");
	}

	function update()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$id=$this->request->getPost('txtId');
		$username=$this->request->getPost('txtUsername');
		$role_id=$this->request->getPost('cmbRole');
		$password=$this->request->getPost('txtPassword');
		$email=$this->request->getPost('txtEmail');
		$full_name=$this->request->getPost('txtFullName');
		$created_at=$this->request->getPost('createdAt');
		
		$user = new \App\Models\UserModel();

		$file=$this->request->getFile('file');
		if($_FILES["file"]["name"]!=""){
			$slug=url_title($username,"-",true);
			$photo=$slug.".".$file->getClientExtension();
		}else{
			$data=$user->find($id);
			$photo=$data['photo'];
		}

		$verify_code=$this->request->getPost('txtVerifyCode');
		$inactive=$this->request->getPost('chkInactive');
		$mobile=$this->request->getPost('txtMobile');
		$user = new \App\Models\UserModel();
		$data=[
			'username' => $username,
			'role_id' => $role_id,
			'password' => $password,
			'email' => $email,
			'full_name' => $full_name,
			// 'created_at' => $created_at,
			// 'photo' => $photo,
			'verify_code' => $verify_code,
			'inactive' => $inactive,
			'mobile' => $mobile,
		];
		$user->update($id,$data);
		if($_FILES["file"]["name"]!=""){
			$file->move(ROOTPATH.'public/img/users/',$photo,true);     //true replace mood
		}

		return redirect()->to('/user');
	}

	function create()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		echo view("layout/header");
		echo view("layout/navbar");
		echo view("layout/sidebar");

		$roles = new \App\Models\RoleModel();
		echo view("pages/user/create",["roles"=>$roles->findAll()]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$username=$this->request->getPost('txtUsername');
		$role_id=$this->request->getPost('cmbRole');
		$password=$this->request->getPost('txtPassword');
		$email=$this->request->getPost('txtEmail');
		$full_name=$this->request->getPost('txtFullName');
		$created_at=$this->request->getPost('createdAt');

		$file=$this->request->getFile('file');
		if($_FILES["file"]["name"]!=""){
			$slug=url_title($username,"-",true);
			$photo=$slug.".".$file->getClientExtension();
		}else{
			$photo="";
		}

		$verify_code=$this->request->getPost('txtVerifyCode');
		$inactive=$this->request->getPost('chkInactive');
		$mobile=$this->request->getPost('txtMobile');
		$user = new \App\Models\UserModel();
		$data=[
			'username' => $username,
			'role_id' => $role_id,
			'password' => $password,
			'email' => $email,
			'full_name' => $full_name,
			'created_at' => $created_at,
			'photo' => $photo,
			'verify_code' => $verify_code,
			'inactive' => $inactive,
			'mobile' => $mobile,
		];
		$user->save($data);
		if($_FILES["file"]["name"]!=""){
			$file->move(ROOTPATH.'public/img/users/',$photo,true);     //true replace mood
		}
		return redirect()->to('/user');
	}

}
