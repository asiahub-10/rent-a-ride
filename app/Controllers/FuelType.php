<?php

namespace App\Controllers;

class FuelType extends BaseController
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

		$fuel_types = new \App\Models\FuelTypeModel();
		echo view("pages/fuel_type/fuel_types",["fuelTypes"=>$fuel_types->paginate(10),"pager"=>$fuel_types->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$fuel_type = new \App\Models\FuelTypeModel();
		$fuel_type->delete($id);
		return redirect()->to('/fueltype');
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

		$fuel_type = new \App\Models\FuelTypeModel();
		$fuel_type_row=$fuel_type->find($id);
		echo view("pages/fuel_type/details",["fuel_type"=>$fuel_type->find($id)]);
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

		$fuel_type = new \App\Models\FuelTypeModel();
		echo view("pages/fuel_type/edit",["fuel_type"=>$fuel_type->find($id)]);
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
		$fuel_type = new \App\Models\FuelTypeModel();
		$data=[
			'name' => $name,
		];
		$fuel_type->update($id,$data);

		return redirect()->to('/fueltype');
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

		echo view("pages/fuel_type/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$name=$this->request->getPost('txtName');
		$fuel_type = new \App\Models\FuelTypeModel();
		$data=[
			'name' => $name,
		];
		$fuel_type->save($data);
		return redirect()->to('/fueltype');
	}

}
