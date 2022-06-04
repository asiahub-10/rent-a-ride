<?php

namespace App\Controllers;

class Category extends BaseController
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

		$categories = new \App\Models\CategoryModel();
		echo view("pages/categorie/categories",["categories"=>$categories->paginate(10),"pager"=>$categories->pager]);

		echo view("layout/footer");
	}

	function delete($id)
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$categorie = new \App\Models\CategoryModel();
		$categorie->delete($id);
		return redirect()->to('/category');
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

		$categorie = new \App\Models\CategoryModel();
		$categorie_row=$categorie->find($id);
		echo view("pages/categorie/details",["categorie"=>$categorie->find($id)]);
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

		$categorie = new \App\Models\CategoryModel();
		echo view("pages/categorie/edit",["categorie"=>$categorie->find($id)]);
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
		$passenger_capacity=$this->request->getPost('txtPassengerCapacity');
		$luggage_capacity=$this->request->getPost('txtLuggageCapacity');
		$categorie = new \App\Models\CategoryModel();
		$data=[
			'name' => $name,
			'passenger_capacity' => $passenger_capacity,
			'luggage_capacity' => $luggage_capacity,
		];
		$categorie->update($id,$data);

		return redirect()->to('/category');
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

		echo view("pages/categorie/create",[]);
		echo view("layout/footer");
	}

	function save()
	{
		$session=session();
		if(!isset($session->sid)){
			return redirect()->to('/admin');
		}

		$name=$this->request->getPost('txtName');
		$passenger_capacity=$this->request->getPost('txtPassengerCapacity');
		$luggage_capacity=$this->request->getPost('txtLuggageCapacity');
		$categorie = new \App\Models\CategoryModel();
		$data=[
			'name' => $name,
			'passenger_capacity' => $passenger_capacity,
			'luggage_capacity' => $luggage_capacity,
		];
		$categorie->save($data);
		return redirect()->to('/category');
	}

}
