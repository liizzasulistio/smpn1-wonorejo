<?php namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $mRequest;
    public function __construct()
    {
        $this->mRequest = service('request');
    }


    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        helper(['form']);

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
                $user = $model->where('UserEmail', $username)->orWhere('UserUsername', $username)->first();

              
                $this->setUserSession($user);
                return redirect()->to('dashboard');
                
                
            }
        }
        return view('page/login', $data);
    }



    private function setUserSession($user)
    {
        $data = [
            'UserID' => $user['UserID'],
            'UserEmail' => $user['UserEmail'],
            'UserName' => $user['UserName'],
            'UserUsername' => $user['UserUsername'],
            'UserRole' => $user['UserRole'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}