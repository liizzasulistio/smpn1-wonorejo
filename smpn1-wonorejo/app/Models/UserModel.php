<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table='users';
    protected $primaryKey = 'UserID';
    protected $useTimestamps = true;
    protected $allowedFields = 
    [
        'UserName',
        'UserUsername',
        'UserEmail',
        'UserPassword',
        'UserRole',
        'UserStatus',
        'uniid',
    ];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }
    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if(isset($data['data']['UserPassword']))
            $data['data']['UserPassword'] = password_hash($data['data']['UserPassword'], PASSWORD_DEFAULT);
        return $data;
    }
}