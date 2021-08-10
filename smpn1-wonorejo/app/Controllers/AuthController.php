<?php
namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public $email;
    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->UserModel = new UserModel();
        $this->email = \Config\Services::email();
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
        $data = [
            'title' => 'Pengguna'
        ];
        return view('admin/user/index', $data);
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
        // if($this->mRequest->getMethod() == 'post')
        // {
        //     $rules = [
        //         'UserName' => 'required',
        //         'UserUsername' => 'required|is_unique[users.UserUsername]|min_length[4]|max_length[20]',
        //         'UserEmail' => 'required|valid_email|is_unique[users.UserEmail]',
        //         'UserPassword' => 'required|min_length[8]|max_length[15]',
        //         'PasswordConfirm' => 'matches[UserPassword]',
        //     ];

        //     $errors = [
        //         'UserName' => 'Nama harus diisi'
        //     ];

        //     if(!$this->validate($rules, $errors))
        //     {
        //         $data['validation'] = $this->validator;
        //     }
        //     else
        //     {
        //         // echo 'Save Data';
        //         // $this->UserModel->save([
        //         //     'UserName' => $this->mRequest->getVar('UserName'),
        //         //     'UserRole' => $this->mRequest->getVar('UserRole'),
        //         //     'UserUsername' => $this->mRequest->getVar('UserUsername'),
        //         //     'UserEmail' => $this->mRequest->getVar('UserEmail'),
        //         //     'UserPassword' => $this->mRequest->getVar('UserPassword'),
        //         //     'UserStatus' => 'Inactive',
        //         // ]);

        //         // return redirect()->to('admin/user/index');
        //     }
       
       
        
        return view('admin/user/create', $data);
    }

    public function save()
    {
        if($this->mRequest->getMethod() == 'post')
        {
        if(!$this->validate([
                'UserName' => [
                    'rules' => 'required',
                    'errors' => [
                      'required' => 'Nama harus diisi'  
                    ],
                ],
                'UserUsername' => [
                    'rules' => 'required|is_unique[users.UserUsername]|min_length[4]|max_length[20]',
                    'errors' => [
                        'required' => 'Username harus diisi',
                        'is_unique[users.UserUsername]' => 'Username telah digunakan',
                        'min_length' => 'Username minimum terdiri dari 4 karakter',
                        'max_length' => 'Username maksimum terdiri dari 20 karakter'
                    ],
                ],
                'UserEmail' => [
                    'rules' => 'required|valid_email|is_unique[users.UserEmail]',
                    'errors' => [
                        'required' => 'E-mail harus diisi',
                        'valid_email' => 'E-mail yang dimasukkan bukan e-mail yang valid',
                        'is_unique' => 'E-mail yang dimasukkan telah terdaftar',
                    ]
                ],
                'UserPassword' => [
                    'rules' => 'required|min_length[8]|max_length[15]',
                    'errors' => [
                        'required' => 'Password harus diisi',
                        'min_length' => 'Password minimum terdiri dari 8 karakter',
                        'max_length' => 'Password maksimum terdiri 15 karakter',
                    ],
                ],
                'PasswordConfirm' => [
                    'rules' => 'matches[UserPassword]',
                    'errors' => [
                        'matches' =>'Password yang diisikan tidak sama'
                    ],
                ],
            ]))
            {
                $validation = \Config\Services::validation();
                return redirect()->to('/pengguna/create')->withInput()->with('validation', $validation);
            }

            $uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
            $this->UserModel->save([
                'UserName' => $this->mRequest->getVar('UserName'),
                'UserUsername' => $this->mRequest->getVar('UserUsername'),
                'UserEmail' => $this->mRequest->getVar('UserEmail'),
                'UserPassword' => $this->mRequest->getVar('UserPassword'),
                'UserRole' => $this->mRequest->getVar('UserRole'),
                'UserStatus' => 'Inactive',
                'uniid' => $uniid,
            ]);

            $to = $this->mRequest->getVar('UserEmail');
            $subject = 'Aktivasi Akun - SMPN 1 Wonorejo';
            $message = $this->mRequest->getVar('UserName').' selamat datang di SMPN 1 Wonorejo'.". Silakan klik link berikut ini untuk mengaktifkan akun<br>"
            ."<a href='".base_url()."/login/activate/".$uniid."'>Aktifkan sekarang</a><br>Terima kasih.";

            $this->email = \Config\Services::email();
            $this->email->setTo($to);
            $this->email->setFrom('chronosaurus9@gmail.com', 'SMPN 1 Wonorejo');
            $this->email->setSubject($subject);
            $this->email->setMessage($message);
            $this->email->send();
            if($this->email->send())
            {
                echo "Akun telah berhasil dibuat, e-mail aktivasi telah dikirimkan";
            }
            else
            {
                echo $this->email->printDebugger(['headers']);
            }


            // return redirect()->to('/pengguna');
        }}
  
}