<?php

namespace App\Controllers;

class PriceType extends BaseController
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

		$price_types = new \App\Models\PriceTypeModel();
		echo view("pages/price_type/price_types",["priceTypes"=>$price_types->paginate(10),"pager"=>$price_types->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$price_type = new \App\Models\PriceTypeModel();
		$price_type->delete($id);
		return redirect()->to('/PriceType');
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

		$price_type = new \App\Models\PriceTypeModel();
		$price_type_row=$price_type->find($id);
		echo view("pages/price_type/details",["price_type"=>$price_type->find($id)]);
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

		$price_type = new \App\Models\PriceTypeModel();
		echo view("pages/price_type/edit",["price_type"=>$price_type->find($id)]);
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
		$price_type = new \App\Models\PriceTypeModel();
		$data=[
			'name' => $name,
		];
		$price_type->update($id,$data);

		return redirect()->to('/PriceType');
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

		echo view("pages/price_type/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$name=$this->request->getPost('txtName');
		$price_type = new \App\Models\PriceTypeModel();
		$data=[
			'name' => $name,
		];
		$price_type->save($data);
		return redirect()->to('/PriceType');
	}

}
