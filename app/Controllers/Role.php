<?php

namespace App\Controllers;

class Role extends BaseController
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

		$roles = new \App\Models\RoleModel();
		echo view("pages/role/roles",["roles"=>$roles->paginate(10),"pager"=>$roles->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$role = new \App\Models\RoleModel();
		$role->delete($id);
		return redirect()->to('/role');
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

		$role = new \App\Models\RoleModel();
		$role_row=$role->find($id);
		echo view("pages/role/details",["role"=>$role->find($id)]);
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

		$role = new \App\Models\RoleModel();
		echo view("pages/role/edit",["role"=>$role->find($id)]);
		echo view("layout/footer");
	}

	function update()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$id=$this->request->getPost('txtId');
		$name=$this->request->getPost('txtName');
		$role = new \App\Models\RoleModel();
		$data=[
			'name' => $name,
		];
		$role->update($id,$data);

		return redirect()->to('/role');
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

		echo view("pages/role/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$name=$this->request->getPost('txtName');
		$role = new \App\Models\RoleModel();
		$data=[
			'name' => $name,
		];
		$role->save($data);
		return redirect()->to('/role');
	}

}
