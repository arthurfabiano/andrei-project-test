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
    
    public function login() 
    {
        $dados = [
            'email'  => $this->request->getVar('email'),
            'senha'  => $this->request->getVar('password')
        ];

        $result = $this->control->getLogin($dados);

        
        if (count($result) >= 1) 
        {
            $setSession = [
                'userID'        => $result[0]['id'],
                'userName'      => $result[0]['first_name'],
                'userEmail'     => $result[0]['email'],
                'userPerfil'    => $result[0]['perfil_id'],
                'produtoraID'   => $result[0]['produtora_id_wp'],
                'isLogin'       => true
            ];
            $this->session->set($setSession);

            return redirect()->to('/dashboard');

        } 
        else 
        {
            return redirect()->to('/login');
        }
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

    public function sair() {
        $this->session->destroy();
        return redirect()->to('/login');
    }

}
