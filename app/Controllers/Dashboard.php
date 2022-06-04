<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session=session();
        if(!isset($session->sid)){
            return redirect()->to('/admin');
        }
        // return view('welcome_message');
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('layout/sidebar');
        echo view('pages/dashboard',['username'=>$session->suser]);
        echo view('layout/footer');
    }
}
