<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave()
    {
        $model = new UserModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            )
        ];

        $model->insert($data);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginCheck()
    {
        $session = session();

        $model = new UserModel();

        $email = $this->request->getPost('email');

        $password = $this->request->getPost('password');

        $user = $model
            ->where('email', $email)
            ->first();

        if($user)
        {
            if(password_verify($password, $user['password']))
            {
                $session->set('user_id', $user['id']);

                $session->set('name', $user['name']);

                return redirect()->to('/dashboard');
            }
        }

        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}