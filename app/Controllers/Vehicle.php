<?php

namespace App\Controllers;

class Vehicle extends BaseController
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

		$vehicleModel = new \App\Models\VehicleModel();
		// $vehicles = new \App\Models\VehicleModel();
		
		$vehicles = $vehicleModel->select('vehicles.*,c.name,c.passenger_capacity,c.luggage_capacity,f.name fuel')
								// ->from('vehicles as v')
								->join('categories c','c.id = vehicles.category_id')
								->join('fuel_types f','f.id = vehicles.fuel_type_id')
								->orderBy("vehicles.id desc");

		echo view("pages/vehicle/vehicles",["vehicles"=>$vehicles->paginate(5),"pager"=>$vehicles->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$vehicle = new \App\Models\VehicleModel();
		$vehicle->delete($id);
		return redirect()->to('/vehicle');
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

		$vehicleModel = new \App\Models\VehicleModel();
		$vehicle = $vehicleModel->select('v.*,c.*,f.name fuel')
								->from('vehicles v')
								->join('categories c','c.id=v.category_id')
								->join('fuel_types f','f.id=v.fuel_type_id')
								->where("v.id = $id")
								->first();
		
	
		// $vehicle_row=$vehicle->find($id);
		// echo view("pages/vehicle/details",["vehicle"=>$vehicle->find($id)]);

		echo view("pages/vehicle/details",["vehicle"=>$vehicle]);
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

		$vehicle = new \App\Models\VehicleModel();
		$categorys = new \App\Models\CategoryModel();
		$fuel_types = new \App\Models\FuelTypeModel();
		echo view("pages/vehicle/edit",["vehicle"=>$vehicle->find($id), "categorys"=>$categorys->findAll(), "fuel_types"=>$fuel_types->findAll()]);
		echo view("layout/footer");
	}

	function update()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$id=$this->request->getPost('txtId');
		$vehicle_license_no=$this->request->getPost('txtVehicleLicenseNo');
		$manufacturer=$this->request->getPost('txtManufacturer');
		$model=$this->request->getPost('txtModel');
		$model_year=$this->request->getPost('txtModelYear');
		$category_id=$this->request->getPost('cmbCategory');

		$vehicle = new \App\Models\VehicleModel();

		$file=$this->request->getFile('file');
		if($_FILES["file"]["name"]!=""){
			$slug=url_title($vehicle_license_no,"-",true);
			$photo=$slug.".".$file->getClientExtension();
		}else{
			$data=$vehicle->find($id);
			$photo=$data['photo'];
		}

		$fuel_type_id=$this->request->getPost('cmbFuelType');
		$have_ac=$this->request->getPost('txtHaveAc');
		$factor=$this->request->getPost('txtFactor');
		$vehicle = new \App\Models\VehicleModel();
		$data=[
			'vehicle_license_no' => $vehicle_license_no,
			'manufacturer' => $manufacturer,
			'model' => $model,
			'model_year' => $model_year,
			'category_id' => $category_id,
			'photo' => $photo,
			'fuel_type_id' => $fuel_type_id,
			'have_ac' => $have_ac,
			'factor' => $factor,
		];
		$vehicle->update($id,$data);
		if($_FILES["file"]["name"]!=""){
			$file->move(ROOTPATH.'public/img/vehicles/',$photo,true);     //true replace mood
		}

		return redirect()->to('/vehicle');
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

		$categorys = new \App\Models\CategoryModel();
		$fuel_types = new \App\Models\FuelTypeModel();
		echo view("pages/vehicle/create",["categorys"=>$categorys->findAll(), "fuel_types"=>$fuel_types->findAll()]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$vehicle_license_no=$this->request->getPost('txtVehicleLicenseNo');
		$manufacturer=$this->request->getPost('txtManufacturer');
		$model=$this->request->getPost('txtModel');
		$model_year=$this->request->getPost('txtModelYear');
		$category_id=$this->request->getPost('cmbCategory');

		$file=$this->request->getFile('file');
		if($_FILES["file"]["name"]!=""){
			$slug=url_title($vehicle_license_no,"-",true);
			$photo=$slug.".".$file->getClientExtension();
		}else{
			$photo="";
		}

		$fuel_type_id=$this->request->getPost('cmbFuelType');
		$have_ac=$this->request->getPost('txtHaveAc');
		$factor=$this->request->getPost('txtFactor');
		$vehicle = new \App\Models\VehicleModel();
		$data=[
			'vehicle_license_no' => $vehicle_license_no,
			'manufacturer' => $manufacturer,
			'model' => $model,
			'model_year' => $model_year,
			'category_id' => $category_id,
			'photo' => $photo,
			'fuel_type_id' => $fuel_type_id,
			'have_ac' => $have_ac,
			'factor' => $factor,
		];
		$vehicle->save($data);
		if($_FILES["file"]["name"]!=""){
			$file->move(ROOTPATH.'public/img/vehicles/',$photo,true);     //true replace mood
		}
		return redirect()->to('/vehicle');
	}

	// ===============
	// front-end 
	// ===============

	function carDetails($id)
	{
		echo view("front_end/layout/header");
		echo view("front_end/layout/navbar");

		$vehicleModel = new \App\Models\VehicleModel();
		$vehicle = $vehicleModel->select('v.*,c.*,f.name fuel')
								->from('vehicles v')
								->join('categories c','c.id=v.category_id')
								->join('fuel_types f','f.id=v.fuel_type_id')
								->where("v.id = $id")
								->first();
		
		echo view("front_end/pages/vehicle/details",["vehicle"=>$vehicle]);
		echo view("front_end/layout/footer");
	}
	function allVehicles(){
		echo view('front_end/layout/header');
        echo view('front_end/layout/navbar');
        $vehicleModel = new \App\Models\VehicleModel();		
		$vehicles = $vehicleModel->select('vehicles.*,c.name,c.passenger_capacity,c.luggage_capacity,f.name fuel')
								->join('categories c','c.id = vehicles.category_id')
								->join('fuel_types f','f.id = vehicles.fuel_type_id')
								->orderBy("vehicles.id desc")
                                ->findAll();
        echo view('front_end/pages/vehicle/all_vehicles',["vehicles"=>$vehicles]);
        echo view('front_end/layout/footer');
	}

}
