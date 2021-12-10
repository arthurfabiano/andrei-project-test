<?php

namespace App\Controllers;

use App\Models\ControlModel;
class User extends BaseController
{

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->control = new ControlModel();
    }

    public function index()
    {
        $dados = [
            'title'        => 'Usuários',
            'sub_title'    => 'Lista dos Eventos Criados',
            'page'         => "user/index",
            'users'        => $this->control->getUsers()
          ];
    
          return view('control', $dados);
    }

    public function register()
    {
        if (empty($_POST)) {
            $dados = [
                'title'        => 'Cadastro de Usuários',
                'sub_title'    => 'Página de Cadastro de Usuário',
                'page'         => "user/register",
                'users'        => $this->control->getUsers()
              ];
        
              return view('control', $dados);
        }
        else 
        {
            $newUser = [
                'first_name'    => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'         => $this->request->getVar('email'),
                'password'      => md5($this->request->getVar('password')),
                'cellphone'     => $this->request->getVar('cellphone'),
                'site'          => $this->request->getVar('site'),
                'facebook'      => $this->request->getVar('facebook'),
                'linkedin'      => $this->request->getVar('linkedin')
            ];
            
            $result = $this->control->save($newUser);
            if($result)
            {
                $this->session->setFlashdata('success', 'USUÁRIO CADASTRADO COM SUCESSO!');
                return redirect()->to('/user/view');
            }
            else 
            {
                $this->session->setFlashdata('error', 'USUÁRIO CADASTRADO COM SUCESSO!');
                return redirect()->to('/user/register');
            }
        }
        
    }

    public function edit($id)
    {
        $dados = [
            'title'        => 'Edição de Usuário',
            'sub_title'    => 'Página de Edição de Usuário',
            'page'         => "user/edit",
            'user'        => $this->control->getUser($id)
        ];

        return view('control', $dados);
        
    }

    public function update()
    {
        $newUser = [
            'first_name'    => $this->request->getVar('first_name'),
            'last_name'     => $this->request->getVar('last_name'),
            'email'         => $this->request->getVar('email'),
            'password'      => md5($this->request->getVar('password')),
            'cellphone'     => $this->request->getVar('cellphone'),
            'site'          => $this->request->getVar('site'),
            'facebook'      => $this->request->getVar('facebook'),
            'linkedin'      => $this->request->getVar('linkedin'),
            'id'        => $this->request->getVar('id')
        ];
        
        $result = $this->control->getUpdate($newUser);
        if($result)
        {
            $this->session->setFlashdata('success', 'USUÁRIO ATUALIZADO COM SUCESSO!');
            return redirect()->to('/user/view');
        }
        else 
        {
            $this->session->setFlashdata('success', 'USUÁRIO NÃO FOI ATUALIZADO TENTE NOVAMENTE!');
            return redirect()->to('/user/register');
        }
    }

    public function delete()
    {
        $idUser = $this->request->getVar('id');
        
        $result = $this->control->getDelete($idUser);
        if($result)
        {
            $this->session->setFlashdata('success', 'USUÁRIO DELETADO COM SUCESSO!');
            return redirect()->to('/user/view');
        }
        else 
        {
            $this->session->setFlashdata('success', 'USUÁRIO NÃO FOI DELETADO TENTE NOVAMENTE!');
            return redirect()->to('/user/register');
        }        
    }

    public function view()
    {
        $dados = [
            'title'        => 'Visualizar Usuários',
            'sub_title'    => 'Listas os Usuários Cadastrados Dentro do Sistema',
            'page'         => "user/view",
            'users'        => $this->control->getUsers()
          ];
    
          return view('control', $dados);
    }
}
