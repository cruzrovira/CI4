<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;

class RegisterController extends BaseController
{
    public function index()
    {
        $model = model('CountriesModel');

        return view('Auth/reguister', ['countries' => $model->findAll()]);
    }

    // para alamacenar un usuario
    public function store()
    {
        // $validation = service('validation');
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => [
                'label' => 'Nombre',
                'rules' => 'required|alpha_space'
            ],
            'surname' => [
                'label' => 'Apellidos',
                'rules' => 'required|alpha_space'
            ],
            'email' => [
                'label' => 'Correo',
                'rules' => 'required|valid_email|is_unique[users.email]'
            ],
            'username' => [
                'label' => 'Nick',
                'rules' => 'required'
            ],
            'id_country' => [
                'label' => 'País',
                'rules' => 'required|is_not_unique[countries.id_country]'
            ],
            'password' => [
                'label' => 'Contraseña',
                'rules' => 'required'
            ],
            'c-password' => [
                'label' => 'Confirmación de contraseña',
                'rules' => 'required|matches[password]'
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            dd($validation->getErrors());
        }
        exit;

        // $data = [
        //     'name' => 'oscar',
        //     'username' => 'cruzrovira',
        //     'email' => 'cruzrovira@gmail.com',
        //     'password' => '1234',
        //     'surname' => 'alfredo',
        //     'id_country' => 2
        // ];

        // $user = new User($data);

        // $model = model('UsersModel');

        // $model->withtgroup(env('defaultGroup'));

        // $userInfo = new UserInfo($data);
        // $model->addUserInfo($userInfo);

        // $model->save($user);
    }
}
