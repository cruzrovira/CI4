<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PostsController extends BaseController
{
    public function index()
    {
        return view('Admin/posts');
    }
}
