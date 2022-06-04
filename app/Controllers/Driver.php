<?php

namespace App\Controllers;

class Driver extends BaseController
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

		$drivers = new \App\Models\DriverModel();
		echo view("pages/driver/drivers",["drivers"=>$drivers->paginate(10),"pager"=>$drivers->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$driver = new \App\Models\DriverModel();
		$driver->delete($id);
		return redirect()->to('/Driver');
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

		$driver = new \App\Models\DriverModel();
		$driver_row=$driver->find($id);
		echo view("pages/driver/details",["driver"=>$driver->find($id)]);
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

		$driver = new \App\Models\DriverModel();
		echo view("pages/driver/edit",["driver"=>$driver->find($id)]);
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
		$dob=$this->request->getPost('dob');
		$gender=$this->request->getPost('rdoGender');
		$phone=$this->request->getPost('txtPhone');
		$nid=$this->request->getPost('txtNid');
		$address=$this->request->getPost('txtAddress');
		$driving_license_no=$this->request->getPost('txtDrivingLicenseNo');
		$license_issue_date=$this->request->getPost('txtLicenseIssueDate');
		$license_validity_date=$this->request->getPost('txtLicenseValidityDate');

		$driver = new \App\Models\DriverModel();

		$file=$this->request->getFile('file');
		if($_FILES["file"]["name"]!=""){
			$slug=url_title($name,"-",true);
			$photo=$slug.".".$file->getClientExtension();
		}else{
			$data=$driver->find($id);
			$photo=$data["photo"];
		}	

		$data=[
			'name' => $name,
			'dob' => $dob,
			'gender' => $gender,
			'phone' => $phone,
			'nid' => $nid,
			'address' => $address,
			'driving_license_no' => $driving_license_no,
			'license_issue_date' => $license_issue_date,
			'license_validity_date' => $license_validity_date,
			'photo' => $photo,
		];
		$driver->update($id,$data);
		if($_FILES["file"]["name"]!=""){
			$file->move(ROOTPATH.'public/img/drivers/',$photo,true);     //true replace mood
		}

		return redirect()->to('/Driver');
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

		echo view("pages/driver/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$name=$this->request->getPost('txtName');
		$dob=$this->request->getPost('dob');
		$gender=$this->request->getPost('rdoGender');
		if($gender){
			$gender=1;
		}else{
			$gender=0;
		}
		$phone=$this->request->getPost('txtPhone');
		$nid=$this->request->getPost('txtNid');
		$address=$this->request->getPost('txtAddress');
		$driving_license_no=$this->request->getPost('txtDrivingLicenseNo');
		$license_issue_date=$this->request->getPost('txtLicenseIssueDate');
		$license_validity_date=$this->request->getPost('txtLicenseValidityDate');

		// echo "name-$name dob-$dob gen-$gender phone-$phone nid-$nid add-$address dln-$driving_license_no lid-$license_issue_date lvd-$license_validity_date";
		// echo $gender;

		$file=$this->request->getFile('file');
		if($_FILES["file"]["name"]!=""){
			$slug=url_title($name,"-",true);
			$photo=$slug.".".$file->getClientExtension();
		}else{
			$photo="";
		}

		$driver = new \App\Models\DriverModel();
		$data=[
			'name' => $name,
			'dob' => $dob,
			'gender' => $gender,
			'phone' => $phone,
			'nid' => $nid,
			'address' => $address,
			'driving_license_no' => $driving_license_no,
			'license_issue_date' => $license_issue_date,
			'license_validity_date' => $license_validity_date,
			'photo' => $photo,
		];
		$driver->save($data);
		if($_FILES["file"]["name"]!=""){
			$file->move(ROOTPATH.'public/img/drivers/',$photo,true);     //true replace mood
		}
		return redirect()->to('/Driver');
	}

}
