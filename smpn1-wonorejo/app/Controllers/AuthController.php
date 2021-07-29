<?php
namespace App\Controllers;

use Faker\Provider\Base;

class AuthController extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('admin/login', $data);
    }

    public function index()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function create()
    {
        $data = [
            'title' => 'Registrasi'
        ];
        return view('admin/register', $data);
    }

}