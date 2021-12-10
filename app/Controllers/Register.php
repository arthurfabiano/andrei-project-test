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

    public function cadastrar()
    {
        if (empty($_POST)) {
            return view('cadastrar');
        }
        else 
        {
            $newUser = [
                'first_name'    => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'         => $this->request->getVar('email'),
                'cpf'           => $this->request->getVar('cpf'),
                'celular'       => $this->request->getVar('celular'),
                'site'          => $this->request->getVar('site'),
                'social'        => $this->request->getVar('social'),
                'password'      => md5($this->request->getVar('password'))
            ];
            
            $result = $this->control->save($newUser);
            if($result)
            {
                return redirect()->to('/login');
            }
            else 
            {
                return redirect()->to('/cadastrar');
            }
        }
        
    }

}
