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
                if($user['UserRole'] == 'Admin')
                {
                    return redirect()->to('dashboard');
                }
                if($user['UserRole'] == 'Penulis')
                {
                    // return redirect()->to('penulis/kegiatan');
                    return redirect()->to('dashboard');
                }
             
                
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
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $teacher = $this->UserModel->search($keyword);
        }
        else
        {
            $teacher = $this->UserModel;
        }
        $currentPage = $this->mRequest->getVar('pager') ? $this->mRequest->getVar('pager') : 1;
        $data = [
            'title' => 'Pengguna',
            'user' => $this->UserModel->paginate(10, 'teacher'), 
            'pager' => $teacher->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/user/index', $data);
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
                'UserRole' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Role harus diisi'
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
            session()->setFlashdata('message', 'Data pengguna telah berhasil ditambahkan.');
            return redirect()->to('/pengguna');
        }}
  
        public function update($UserUsername)
        {
            $data = [
                'title' => 'Detail Pengguna',
                'user' => $this->UserModel->getUser($UserUsername),
                'validation' => \Config\Services::validation(),
            ];
            return view('admin/user/update', $data);
        }

        public function edit($UserID)
        {
            $oldUsername = $this->UserModel->where('UserID', $UserID)->first()['UserUsername'];
            if($oldUsername == $this->mRequest->getVar('UserUsername'))
            {
                $usernameRule = 'required';
            }
            else
            {
                $usernameRule = 'required|is_unique[users.UserUsername]';
            }

            if($this->request->getPost('UserPassword') != '')
            {
                if(!$this->validate([
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
                    return redirect()->to('/pengguna/update/'.$this->mRequest->getVar('UserUsername'))->withInput()->with('validation', $validation);
                }
            }

            if(!$this->validate([
                'UserName' => [
                    'rules' => 'required',
                    'errors' => [
                      'required' => 'Nama harus diisi'  
                    ]
                ],
                'UserUsername' => [
                    'rules' => $usernameRule,
                    'errors' => [
                        'required' => 'Username harus diisi',
                        'is_unique[users.UserUsername]' => 'Username telah digunakan',
                    ],
                ],
            ]))
            {
                $validation = \Config\Services::validation();
                return redirect()->to('/pengguna/update/'.$this->mRequest->getVar('UserUsername'))->withInput()->with('validation', $validation);
            }

            $this->UserModel->save([
                'UserID' => $UserID,
                'UserName' => $this->mRequest->getVar('UserName'),
                'UserUsername' => $this->mRequest->getVar('UserUsername'),
                'UserRole' => $this->mRequest->getVar('UserRole'),
            ]);

            if($this->request->getPost('UserPassword') !== '')
            {
                $this->UserModel->save([
                    'UserID' => $UserID,
                    'UserPassword' => $this->mRequest->getPost('UserPassword'),]);
            }
            session()->setFlashdata('message', 'Data pengguna telah berhasil diubah.');
            return redirect()->to('/pengguna');
        }

    
        public function delete($UserID)
        {
            $this->UserModel->find($UserID);
            $this->UserModel->delete($UserID);
            session()->setFlashdata('message', 'Data pengguna telah berhasil dihapus.');
            return redirect()->to('/pengguna');
        }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}