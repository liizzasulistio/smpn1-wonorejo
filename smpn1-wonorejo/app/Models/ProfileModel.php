<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
	protected $table='profiles';
    protected $primaryKey = 'ProfileID';
    protected $useTimestamps = true;
    protected $allowedFields = 
    [
        'ProfileTitle',
        'ProfileField',
        'ProfileCat',
        'UserID_FK',
    ];

    public function getHistory()
    {
        return $this->db
        ->query("SELECT * FROM profiles INNER JOIN users ON profiles.UserID_FK = users.UserID WHERE ProfileCat = 'Sejarah'")
        ->getResultArray();
    }
}
