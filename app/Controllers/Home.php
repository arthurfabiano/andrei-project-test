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
            'title'                 => 'Eventos',
            'sub_title'             => 'Lista dos Eventos Criados',
            'page'                  => "dashboard/index",
            'users'                 => $this->control->getUsers(),
            'count_delete_users'    => $this->control->getCountDeleteUsers(),
            'count_register_users'  => $this->control->getCountRegisterUsers(),
            'count_facebook_users'  => $this->control->getCountFacebookUsers(),
            'count_linkedin_users'  => $this->control->getCountLinkeginUsers()
          ];
    
          return view('control', $dados);
    }
}
