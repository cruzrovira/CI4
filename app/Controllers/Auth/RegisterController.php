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
