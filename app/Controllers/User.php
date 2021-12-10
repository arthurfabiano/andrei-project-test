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
        if ($this->session->get('isLogin') != true) {
            return redirect()->to('/');
        }

        $dados = [
            'title'        => 'Users',
            'sub_title'    => 'List of Created Events',
            'page'         => "user/index",
            'users'        => $this->control->getUsers()
          ];
    
          return view('control', $dados);
    }

    public function register()
    {
        if ($this->session->get('isLogin') != true) {
            return redirect()->to('/');
        }

        if (empty($_POST)) {
            $dados = [
                'title'        => 'User Registration',
                'sub_title'    => 'User Registration Page',
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
                $this->session->setFlashdata('success', 'USER REGISTERED SUCCESSFULLY!');
                return redirect()->to('/user/view');
            }
            else 
            {
                $this->session->setFlashdata('error', 'ERROR REGISTERING THE USER!');
                return redirect()->to('/user/register');
            }
        }
        
    }

    public function edit($id)
    {
        if ($this->session->get('isLogin') != true) {
            return redirect()->to('/');
        }

        $dados = [
            'title'        => 'User Edition',
            'sub_title'    => 'User Edit Page',
            'page'         => "user/edit",
            'user'        => $this->control->getUser($id)
        ];

        return view('control', $dados);
        
    }

    public function update()
    {
        if ($this->session->get('isLogin') != true) {
            return redirect()->to('/');
        }

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
            $this->session->setFlashdata('success', 'USER UPDATED SUCCESSFULLY!');
            return redirect()->to('/user/view');
        }
        else 
        {
            $this->session->setFlashdata('success', 'USER NOT UPDATED TRY AGAIN!');
            return redirect()->to('/user/register');
        }
    }

    public function delete()
    {
        if ($this->session->get('isLogin') != true) {
            return redirect()->to('/');
        }

        $idUser = $this->request->getVar('id');
        
        $result = $this->control->getDelete($idUser);
        if($result)
        {
            $this->session->setFlashdata('success', 'USER DELETED SUCCESSFULLY!');
            return redirect()->to('/user/view');
        }
        else 
        {
            $this->session->setFlashdata('success', 'USER NOT DELETED TRY AGAIN!');
            return redirect()->to('/user/register');
        }        
    }

    public function view()
    {
        if ($this->session->get('isLogin') != true) {
            return redirect()->to('/');
        }
        
        $dados = [
            'title'        => 'View Users',
            'sub_title'    => 'Lists of Registered Users within the System',
            'page'         => "user/view",
            'users'        => $this->control->getUsers()
          ];
    
          return view('control', $dados);
    }
}
