<?php

namespace App\Controllers;

class Booking extends BaseController
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

		$bookingModel = new \App\Models\BookingModel();
		$bookings = $bookingModel->select("bookings.*,c.name")->join("customers c","c.id = bookings.customer_id");
		echo view("pages/booking/bookings",["bookings"=>$bookings->paginate(10),"pager"=>$bookings->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$booking = new \App\Models\BookingModel();
		$booking->delete($id);
		return redirect()->to('/Booking');
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

		$bookingModel = new \App\Models\BookingModel();
		$booking = $bookingModel->select('bookings.*,c.id customerId,c.name,c.phone')->join('customers c', 'c.id = bookings.customer_id');

		$bookingDetailsModel = new \App\Models\BookingDetailModel();
		$booking_details = $bookingDetailsModel->select("booking_details.*")
												->where("booking_details.booking_id = '$id'");

		//===============
		
		$db=db_connect();
		$result=$db->query("select bd.*,d.name driver,c.name category,v.vehicle_license_no vehicle,v.model,v.factor,v.fuel_type_id,pt.name price_type,rt.name ride_type from code_booking_details bd,code_drivers d,code_categories c,code_vehicles v,code_price_types pt,code_ride_types rt where d.id=bd.driver_id and c.id=v.category_id and v.id=bd.vehicle_id and pt.id=bd.price_type_id and rt.id=bd.ride_type_id and bd.booking_id='$id'");
		$data=[];
        foreach($result->getResult("array")as $row){
            $data[]=$row;
        } 

		//===============


		// $bookingDetailJoin=$query->getResult();
		
		// print_r($booking_details->findAll());
		// $booking_row=$booking->find($id);
		echo view("pages/booking/details",["booking"=>$booking->find($id),"bookingDetails"=>$booking_details->findAll(),"bookingDetailJoin"=>$data]);
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

		$booking = new \App\Models\BookingModel();
		$customers = new \App\Models\CustomerModel();
		echo view("pages/booking/edit",["booking"=>$booking->find($id), "customers"=>$customers->findAll()]);
		echo view("layout/footer");
	}

	function update()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$id=$this->request->getPost('txtId');
		$customer_id=$this->request->getPost('cmbCustomer');
		$order_date=$this->request->getPost('txtOrderDate');
		$order_total=$this->request->getPost('txtOrderTotal');
		$paid_amount=$this->request->getPost('txtPaidAmount');
		$booking = new \App\Models\BookingModel();
		$data=[
			'customer_id' => $customer_id,
			'order_date' => $order_date,
			'order_total' => $order_total,
			'paid_amount' => $paid_amount,
		];
		$booking->update($id,$data);

		return redirect()->to('/Booking');
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

		$customers = new \App\Models\CustomerModel();
		$bookings = new \App\Models\BookingModel();
		$vehicles = new \App\Models\VehicleModel();
		$drivers = new \App\Models\DriverModel();
		$ride_types = new \App\Models\RideTypeModel();
		$price_types = new \App\Models\PriceTypeModel();
		$categories = new \App\Models\CategoryModel();

		echo view("pages/booking/create",["customers"=>$customers->findAll(),"bookings"=>$bookings->findAll(),"categories"=>$categories->findAll(), "vehicles"=>$vehicles->findAll(), "drivers"=>$drivers->findAll(), "ride_types"=>$ride_types->findAll(), "price_types"=>$price_types->findAll()]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$customer_id=$this->request->getPost('cmbCustomer');
		$order_date=$this->request->getPost('txtOrderDate');
		$order_total=$this->request->getPost('txtOrderTotal');
		$paid_amount=$this->request->getPost('txtPaidAmount');
		$booking = new \App\Models\BookingModel();
		$data=[
			'customer_id' => $customer_id,
			'order_date' => $order_date,
			'order_total' => $order_total,
			'paid_amount' => $paid_amount,
		];
		$booking->save($data);
		return redirect()->to('/Booking');
	}

	function orderTotal(){
		
		// if ($this->request->isAJAX()) {
		// 	echo "ok";
		// }
		$vehicle=$this->request->getPost('vehicle');
		$priceType=$this->request->getPost('priceType');
		$rideType=$this->request->getPost('rideType');
		$distance=$this->request->getPost('distance');
		$distance!=""?$distance:$distance=1;

		$vehicles = new \App\Models\VehicleModel();
		$findVehical=$vehicles->find($vehicle);
		$carFactor= $findVehical["factor"];
		// $carFactor= $findVehical["factor"];

		if($findVehical["fuel_type_id"]==1){
			$fuel=1.24;
		}elseif($findVehical["fuel_type_id"]==2){
			$fuel=0.95;
		}elseif($findVehical["fuel_type_id"]==3){
			$fuel=0.40;
		}
		
		if($rideType==1){
			$ride=1.2;
		}elseif($rideType==2){
			$ride=2;
		}

		if($priceType==1){
			$totalPrice=$carFactor*50*$distance*$fuel*$ride;
		}elseif($priceType==2){
			$totalPrice=$carFactor*400*$fuel;
		}
		

		return $this->response->setJSON(['amount'=>$totalPrice,'distance'=>$distance]);
	}

	function categorizedVehical(){
		
		$category_id=$this->request->getPost('category_id');

		$vehicleModel = new \App\Models\VehicleModel();
		$vehicles = $vehicleModel->select("vehicles.*")->where("vehicles.category_id = '$category_id'");
		
		return $this->response->setJSON(['vehicles'=>$vehicles->findAll()]);
	}

	function saveBooking(){
		$customer_id=$this->request->getPost('customer_id');
		$order_date=$this->request->getPost('order_date');
		$order_total=$this->request->getPost('order_total');
		$paid_amount=$this->request->getPost('paid_amount');
		$bookings=$this->request->getPost('bookings');
		
		$booking = new \App\Models\BookingModel();
		$data=[
			'customer_id' => $customer_id,
			'order_date' => $order_date,
			'order_total' => $order_total,
			'paid_amount' => $paid_amount,
		];
		$booking->save($data);		
		$last_id=$booking->insertID;
		
		foreach($bookings as $book){
			$booking_detail = new \App\Models\BookingDetailModel();
			$row=[
				'booking_id' => $last_id,
				'vehicle_id' => $book["item_id"],
				'driver_id' => $book["driver_id"],
				'ride_type_id' => $book["rideType"],
				'pickup_date' => $book["pickupDate"],
				'pickup_time' => $book["pickupTime"],
				'pickup_location' => $book["pickupLocation"],
				'pickup_location' => $book["pickupLocation"],
				'drop_off_location' => $book["dropOffLocation"],
				'distance' => $book["distance"],
				'price_type_id' => $book["priceType"],
			];
			$booking_detail->save($row);
		}

		return $this->response->setJSON(['last_id'=>$last_id]);
	}

	// ===============
	// front-end 
	// ===============

	function carBooking(){
		echo view('front_end/layout/header');
        echo view('front_end/layout/navbar');
		$categories = new \App\Models\CategoryModel();		
        $districts= new \App\Models\DistrictDistanceModel();
        $vehicleModel = new \App\Models\VehicleModel();		
		$vehicles = $vehicleModel->select('vehicles.*,c.name,c.passenger_capacity,c.luggage_capacity,f.name fuel')
								->join('categories c','c.id = vehicles.category_id')
								->join('fuel_types f','f.id = vehicles.fuel_type_id')
								->orderBy("vehicles.id desc")
                                ->findAll();
        echo view('front_end/pages/booking/booking',['districts'=>$districts->findAll(),"vehicles"=>$vehicles,"categories"=>$categories->findAll()]);
        echo view('front_end/layout/footer');
	}

}
