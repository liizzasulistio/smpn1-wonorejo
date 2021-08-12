<?php namespace App\Validation;
use App\Models\UserModel;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        if(substr_count($data['UserUsername'], '@') > 0)
        {
            $user = $model->where('UserEmail', $data['UserUsername'])->first();
            if(!$user)
                return false;

            return password_verify($data['UserPassword'], $user['UserPassword']);
        }
        else
        {
            $user = $model->where('UserUsername', $data['UserUsername'])->first();
            if(!$user)
                return false;

            return password_verify($data['UserPassword'], $user['UserPassword']);
        }
    }
}