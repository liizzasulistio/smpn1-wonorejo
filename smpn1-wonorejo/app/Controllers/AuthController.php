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
            'title' => 'Login',
        ];

        if($this->mRequest->getMethod() == 'post')
        {
            // Validation
            $rules = [
                'UserUsername' => 'required',
                'UserPassword' => 'required|validateUser[UserUsername, UserPassword]',
            ];
            $errors = [
                'UserPassword' => [
                    'validateUser' => 'Username or Email and Password don\'t match',
                ]
            ];
            if(!$this->validate($rules, $errors))
            {
                $data['validation'] = $this->validator;
            }
            else
            {
                $model = new UserModel();
                $username = $this->mRequest->getVar('UserUsername');
                $user = $model->where('UserUsername', $username)->first();

              
                $this->setUserSession($user);
                return redirect()->to('pengguna');
                
                
            }
        }
        return view('admin/login', $data);
    }

    private function setUserSession($user)
    {
        $data = [
            'UserID' => $user['UserID'],
            'UserName' => $user['UserName'],
            'UserUsername' => $user['UserUsername'],
            'UserRole' => $user['UserRole'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function index()
    {
        $data = [
            'title' => 'Pengguna',
            'user' => $this->UserModel->getUser(),
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

          
            $this->UserModel->save([
                'UserName' => $this->mRequest->getVar('UserName'),
                'UserUsername' => $this->mRequest->getVar('UserUsername'),
                'UserPassword' => $this->mRequest->getVar('UserPassword'),
                'UserRole' => $this->mRequest->getVar('UserRole'),
            ]);

            return redirect()->to('/pengguna');
        }}
  
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}