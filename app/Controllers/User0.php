<?php

namespace App\Controllers;

class User0 extends BaseController
{
    public function index()
    {
        $session=session();
        if(!isset($session->sid)){
            return redirect()->to('/');
        }
        
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('layout/sidebar');
        echo view('pages/user/users');
        echo view('layout/footer');
    }
}
