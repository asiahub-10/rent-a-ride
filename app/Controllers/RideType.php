<?php

namespace App\Controllers;

class RideType extends BaseController
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

		$ride_types = new \App\Models\RideTypeModel();
		echo view("pages/ride_type/ride_types",["rideTypes"=>$ride_types->paginate(10),"pager"=>$ride_types->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$ride_type = new \App\Models\RideTypeModel();
		$ride_type->delete($id);
		return redirect()->to('/RideType');
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

		$ride_type = new \App\Models\RideTypeModel();
		$ride_type_row=$ride_type->find($id);
		echo view("pages/ride_type/details",["ride_type"=>$ride_type->find($id)]);
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

		$ride_type = new \App\Models\RideTypeModel();
		echo view("pages/ride_type/edit",["ride_type"=>$ride_type->find($id)]);
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
		$ride_type = new \App\Models\RideTypeModel();
		$data=[
			'name' => $name,
		];
		$ride_type->update($id,$data);

		return redirect()->to('/RideType');
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

		echo view("pages/ride_type/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$name=$this->request->getPost('txtName');
		$ride_type = new \App\Models\RideTypeModel();
		$data=[
			'name' => $name,
		];
		$ride_type->save($data);
		return redirect()->to('/RideType');
	}

}
