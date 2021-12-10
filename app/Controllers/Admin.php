<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct() {
        $this->session = \Config\Services::session();
        if ($this->session->get('isLogin') != true) {
            return view('login');
        }
    }

    public function index()
    {
        $dados = [
            'title'        => 'Administrator',
            'sub_title'    => 'Administrator Home Page',
            'page'         => "admin/index"
          ];
    
          return view('control', $dados);
    }

    public function perfil()
    {
        $dados = [
            'title'        => 'User Profile',
            'sub_title'    => 'User Profile Registration',
            'page'         => "admin/perfil"
          ];
    
          return view('control', $dados);
    }

    public function painel()
    {
        $dados = [
            'title'        => 'User Profile',
            'sub_title'    => 'User Profile Registration',
            'page'         => "admin/painel"
          ];
    
          return view('control', $dados);
    }
}
