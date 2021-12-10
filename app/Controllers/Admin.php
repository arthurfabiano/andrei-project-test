<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct() {
    }

    public function index()
    {
        $dados = [
            'title'        => 'Administração',
            'sub_title'    => 'Página Inicial do Administrador',
            'page'         => "admin/index"
          ];
    
          return view('control', $dados);
    }

    public function perfil()
    {
        $dados = [
            'title'        => 'Perfil de Usuário',
            'sub_title'    => 'Cadastro de Perfil de Usuários',
            'page'         => "admin/perfil"
          ];
    
          return view('control', $dados);
    }

    public function painel()
    {
        $dados = [
            'title'        => 'Perfil de Usuário',
            'sub_title'    => 'Cadastro de Perfil de Usuários',
            'page'         => "admin/painel"
          ];
    
          return view('control', $dados);
    }
}
