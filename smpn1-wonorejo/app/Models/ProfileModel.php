<?php namespace App\Models;
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

    public function getProfile($id = false)
    {
        if($id == false)
        {
            return $this->db
            ->query("SELECT * FROM profiles INNER JOIN users ON profiles.UserID_FK = users.UserID WHERE ProfileCat = 'Visi' OR ProfileCat ='Misi' OR ProfileCat = 'Indikator' OR ProfileCat = 'Tujuan'")
            ->getResultArray();
        }
       return $this->where(['ProfileID' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('profiles')->like('ProfileCat', $keyword)
        ->orLike('ProfileField', $keyword);
    }
}