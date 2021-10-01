<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view('Auth/login');
    }

    public function login()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required'
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $email = trim($this->request->getVar('email'));
        $password = trim($this->request->getVar('password'));

        $model = model('UsersModel');

        if (!$user = $model->UserBy('email', $email)) {
            return redirect()->back()->with('msg', ['body' => 'Este usuario no se encuentra registrado en el sistema.', 'color' => 'is-danger']);
        }

        if (!password_verify($password, $user->password)) {
            return redirect()->back()->with('msg', ['body' => 'Credenciales Invalidas', 'color' => 'is-danger']);
        }

        echo 'Usted ha realizado el login de forma corecta';
    }
}
