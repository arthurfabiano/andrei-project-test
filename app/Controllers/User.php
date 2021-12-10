<?php

namespace App\Controllers;

class User extends BaseController
{

    public function __construct() {
    }

    public function index()
    {
        $dados = [
            'title'        => 'Usuários',
            'sub_title'    => 'Lista dos Eventos Criados',
            'page'         => "user/index"
          ];
    
          return view('control', $dados);
    }

    public function register()
    {
        $dados = [
            'title'        => 'Cadastro de Usuários',
            'sub_title'    => 'Página de Cadastro de Usuário',
            'page'         => "user/register"
          ];
    
          return view('control', $dados);
    }

    public function view()
    {
        $dados = [
            'title'        => 'Visualizar Usuários',
            'sub_title'    => 'Listas os Usuários Cadastrados Dentro do Sistema',
            'page'         => "user/view"
          ];
    
          return view('control', $dados);
    }
}
