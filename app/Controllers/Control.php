<?php

namespace App\Controllers;

use App\Models\ControlModel;

class Control extends BaseController
{

    protected $helpers = array('isLogin');

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->control = new ControlModel();
    }

    public function index()
    {
        return view('login');
    }
    
    public function sing_in() 
    {
        $dados = [
            'email'  => $this->request->getVar('email'),
            'senha'  => $this->request->getVar('password')
        ];

        $result = $this->control->getLogin($dados);

        if ($result != false && count($result) >= 1) 
        {
            $setSession = [
                'userID'        => $result[0]['id'],
                'first_name'    => $result[0]['first_name'],
                'last_name'     => $result[0]['last_name'],
                'userEmail'     => $result[0]['email'],
                'userPerfil'    => $result[0]['profile_id'],
                'isLogin'       => true
            ];
            $this->session->set($setSession);

            return redirect()->to('/home');

        } 
        else 
        {
            return view('login');
        }
    }

    public function cadastrar()
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
                return redirect()->to('/login');
            }
            else 
            {
                return redirect()->to('/register');
            }
        }
        
    }

    public function logout() {
        $this->session->destroy();
        return redirect()->to('/');
    }

}
