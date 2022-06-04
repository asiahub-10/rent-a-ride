<?php

namespace App\Controllers;

class BookingDetail extends BaseController
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

		$booking_details = new \App\Models\BookingDetailModel();
		echo view("pages/booking_detail/booking_details",["bookingDetails"=>$booking_details->paginate(10),"pager"=>$booking_details->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$booking_detail = new \App\Models\BookingDetailModel();
		$booking_detail->delete($id);
		return redirect()->to('/BookingDetail');
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

		$booking_detail = new \App\Models\BookingDetailModel();
		$booking_detail_row=$booking_detail->find($id);
		echo view("pages/booking_detail/details",["booking_detail"=>$booking_detail->find($id)]);
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

		$booking_detail = new \App\Models\BookingDetailModel();
		$bookings = new \App\Models\BookingModel();
		$vehicles = new \App\Models\VehicleModel();
		$drivers = new \App\Models\DriverModel();
		$ride_types = new \App\Models\RideTypeModel();
		$price_types = new \App\Models\PriceTypeModel();
		echo view("pages/booking_detail/edit",["booking_detail"=>$booking_detail->find($id), "bookings"=>$bookings->findAll(), "vehicles"=>$vehicles->findAll(), "drivers"=>$drivers->findAll(), "ride_types"=>$ride_types->findAll(), "price_types"=>$price_types->findAll()]);
		echo view("layout/footer");
	}

	function update()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$id=$this->request->getPost('txtId');
		$booking_id=$this->request->getPost('cmbBooking');
		$vehicle_id=$this->request->getPost('cmbVehicle');
		$driver_id=$this->request->getPost('cmbDriver');
		$ride_type_id=$this->request->getPost('cmbRideType');
		$pickup_date=$this->request->getPost('pickupDate');
		$pickup_time=$this->request->getPost('txtPickupTime');
		$pickup_location=$this->request->getPost('txtPickupLocation');
		$drop_off_location=$this->request->getPost('txtDropOffLocation');
		$distance=$this->request->getPost('txtDistance');
		$price_type_id=$this->request->getPost('cmbPriceType');
		$booking_detail = new \App\Models\BookingDetailModel();
		$data=[
			'booking_id' => $booking_id,
			'vehicle_id' => $vehicle_id,
			'driver_id' => $driver_id,
			'ride_type_id' => $ride_type_id,
			'pickup_date' => $pickup_date,
			'pickup_time' => $pickup_time,
			'pickup_location' => $pickup_location,
			'drop_off_location' => $drop_off_location,
			'distance' => $distance,
			'price_type_id' => $price_type_id,
		];
		$booking_detail->update($id,$data);

		return redirect()->to('/BookingDetail');
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

		$bookings = new \App\Models\BookingModel();
		$vehicles = new \App\Models\VehicleModel();
		$drivers = new \App\Models\DriverModel();
		$ride_types = new \App\Models\RideTypeModel();
		$price_types = new \App\Models\PriceTypeModel();
		echo view("pages/booking_detail/create",["bookings"=>$bookings->findAll(), "vehicles"=>$vehicles->findAll(), "drivers"=>$drivers->findAll(), "ride_types"=>$ride_types->findAll(), "price_types"=>$price_types->findAll()]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$booking_id=$this->request->getPost('cmbBooking');
		$vehicle_id=$this->request->getPost('cmbVehicle');
		$driver_id=$this->request->getPost('cmbDriver');
		$ride_type_id=$this->request->getPost('cmbRideType');
		$pickup_date=$this->request->getPost('pickupDate');
		$pickup_time=$this->request->getPost('txtPickupTime');
		$pickup_location=$this->request->getPost('txtPickupLocation');
		$drop_off_location=$this->request->getPost('txtDropOffLocation');
		$distance=$this->request->getPost('txtDistance');
		$price_type_id=$this->request->getPost('cmbPriceType');
		$booking_detail = new \App\Models\BookingDetailModel();
		$data=[
			'booking_id' => $booking_id,
			'vehicle_id' => $vehicle_id,
			'driver_id' => $driver_id,
			'ride_type_id' => $ride_type_id,
			'pickup_date' => $pickup_date,
			'pickup_time' => $pickup_time,
			'pickup_location' => $pickup_location,
			'drop_off_location' => $drop_off_location,
			'distance' => $distance,
			'price_type_id' => $price_type_id,
		];
		$booking_detail->save($data);
		return redirect()->to('/BookingDetail');
	}

	

}
