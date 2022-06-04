<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front_end/layout/header');
        echo view('front_end/layout/navbar');
        $districts= new \App\Models\DistrictDistanceModel();
        $vehicleModel = new \App\Models\VehicleModel();		
		$vehicles = $vehicleModel->select('vehicles.*,c.name,c.passenger_capacity,c.luggage_capacity,f.name fuel')
								->join('categories c','c.id = vehicles.category_id')
								->join('fuel_types f','f.id = vehicles.fuel_type_id')
								->orderBy("vehicles.id desc")
                                ->findAll();
        echo view('front_end/pages/home/home',['districts'=>$districts->findAll(),"vehicles"=>$vehicles]);
        echo view('front_end/layout/footer');
    }
}
