<?php
namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->UserModel = new UserModel();
    }


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
            'title' => 'Buat Pengguna',
            'validation' => \Config\Services::validation(),
        ];
        // $data['validation'] = null;
        if($this->mRequest->getMethod() == 'post')
        {
            $rules = [
                'UserName' => 'required',
                'UserUsername' => 'required|is_unique[users.UserUsername]|min_length[4]|max_length[20]',
                'UserEmail' => 'required|valid_email|is_unique[users.UserEmail]',
                'UserPassword' => 'required|min_length[8]|max_length[15]',
                'PasswordConfirm' => 'matches[UserPassword]',
            ];
            if(!$this->validate($rules))
            {
                $data['validation'] = $this->validator;
            }
            else
            {
                echo 'Save Data';
            }
        }
        return view('admin/user/create', $data);
    }

}