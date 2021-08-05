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
        'UserRole'
    ];
}