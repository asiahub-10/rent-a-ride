<?php

namespace App\Controllers;

class DistrictDistance extends BaseController
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

		$district_distances = new \App\Models\DistrictDistanceModel();
		echo view("pages/district_distance/district_distances",["districtDistances"=>$district_distances->paginate(10),"pager"=>$district_distances->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$district_distance = new \App\Models\DistrictDistanceModel();
		$district_distance->delete($id);
		return redirect()->to('/DistrictDistance');
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

		$district_distance = new \App\Models\DistrictDistanceModel();
		$district_distance_row=$district_distance->find($id);
		echo view("pages/district_distance/details",["district_distance"=>$district_distance->find($id)]);
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

		$district_distance = new \App\Models\DistrictDistanceModel();
		echo view("pages/district_distance/edit",["district_distance"=>$district_distance->find($id)]);
		echo view("layout/footer");
	}

	function update()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$id=$this->request->getPost('txtId');

		$district_distance = new \App\Models\DistrictDistanceModel();

		$district=$this->request->getPost('txtDistrict');
		$distance=$this->request->getPost('txtDistance');
		$factor=$this->request->getPost('txtFactor');
		$data=[
			'district' => $district,
			'distance' => $distance,
			'factor' => $factor,
		];
		$district_distance->update($id,$data);

		return redirect()->to('/DistrictDistance');
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

		echo view("pages/district_distance/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$district=$this->request->getPost('txtDistrict');
		$distance=$this->request->getPost('txtDistance');
		$factor=$this->request->getPost('txtFactor');
		$district_distance = new \App\Models\DistrictDistanceModel();
		$data=[
			'district' => $district,
			'distance' => $distance,
			'factor' => $factor,
		];
		$district_distance->save($data);
		return redirect()->to('/DistrictDistance');
	}

}
