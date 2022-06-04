<?php

namespace App\Controllers;

class Customer extends BaseController
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

		$customers = new \App\Models\CustomerModel();
		echo view("pages/customer/customers",["customers"=>$customers->paginate(10),"pager"=>$customers->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$customer = new \App\Models\CustomerModel();
		$customer->delete($id);
		return redirect()->to('/Customer');
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

		$customer = new \App\Models\CustomerModel();
		$customer_row=$customer->find($id);
		echo view("pages/customer/details",["customer"=>$customer->find($id)]);
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

		$customer = new \App\Models\CustomerModel();
		echo view("pages/customer/edit",["customer"=>$customer->find($id)]);
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
		$phone=$this->request->getPost('txtPhone');
		$customer = new \App\Models\CustomerModel();
		$data=[
			'name' => $name,
			'phone' => $phone,
		];
		$customer->update($id,$data);

		return redirect()->to('/Customer');
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

		echo view("pages/customer/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$name=$this->request->getPost('txtName');
		$phone=$this->request->getPost('txtPhone');
		$customer = new \App\Models\CustomerModel();
		$data=[
			'name' => $name,
			'phone' => $phone,
		];
		$customer->save($data);
		return redirect()->to('/Customer');
	}

}
