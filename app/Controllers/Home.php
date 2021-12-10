<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct() {
    }

    public function index()
    {
        $dados = [
            'title'        => 'Eventos',
            'sub_title'    => 'Lista dos Eventos Criados',
            'page'         => "dashboard/index"
          ];
    
          return view('control', $dados);
    }
}
