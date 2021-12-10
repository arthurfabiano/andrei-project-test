<?php

namespace App\Controllers;

use App\Models\ControlModel;

class Register extends BaseController
{

    protected $helpers = array('isLogin');

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->control = new ControlModel();
    }

    public function index()
    {
        return view('register');
    }

    public function user()
    {
        if (empty($_POST)) {
            return view('register');
        }
        else 
        {
            $newUser = [
                'first_name'    => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'         => $this->request->getVar('email'),
                'password'      => md5($this->request->getVar('password'))
            ];
            
            $result = $this->control->save($newUser);
            if($result)
            {
                return view('login');
            }
            else 
            {
                return view('register');
            }
        }
        
    }

}
