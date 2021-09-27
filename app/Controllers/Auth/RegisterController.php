<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class RegisterController extends BaseController
{
    public function index()
    {
        $data = [
            'username' => 'cruzrovira',
            'email' => 'cruzrovira@gmail.com',
            'password' => '1234',
        ];

        $user = new User($data);

        $model = model('UsersModel');
        $model->withtgroup(env('defaultGroup'));
        $model->save($user);

        //return view('Auth/reguister');
    }

    // para alamacenar un usuario
    public function store()
    {
    }
}