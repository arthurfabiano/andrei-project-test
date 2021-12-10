<?php

namespace App\Controllers;

use App\Models\ControlModel;
class Home extends BaseController
{
    public function __construct() {
        $this->control = new ControlModel();
    }

    public function index()
    {
        $dados = [
            'title'        => 'Eventos',
            'sub_title'    => 'Lista dos Eventos Criados',
            'page'         => "dashboard/index",
            'users'        => $this->control->getUsers()
          ];
    
          return view('control', $dados);
    }
}
