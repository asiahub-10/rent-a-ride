<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        echo view('login');
    }
    public function login()
    {
        $user=$this->request->getPost('txtUser');
        $pass=$this->request->getPost('txtPass');
        // $db = \Config\Database::connect();
        $db = db_connect();
        $res=$db->query("select * from code_users where username='$user' and password='$pass'");
        $user=$res->getRow();
        // echo $user;
        // $userModel = new \App\Models\UserModel();
        // $res=$userModel->where('username', $user)->where('password', $pass)->find();
        // print_r($res);
        if(isset($user)){
            // return view('pages/dashboard', ['user'=>$res]);
            $sdata=[
                'sid'       => $user->id, 
                'suser'     => $user->username, 
                'semail'    => $user->email, 
            ];
            $session=session();
            $session->set($sdata);
            return redirect()->to('/dashboard');
        }else{
            return redirect()->to('/admin');
        }
        // return view('pages/dashboard', ['user'=>$res]);
    }
    public function logout(){
        $sdata=['sid','suser','semail'];
        $session=session();
        $session->remove($sdata);
        return redirect()->to('/admin');
    }
}
