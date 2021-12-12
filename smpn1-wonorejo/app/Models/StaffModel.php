<?php namespace App\Models;
use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staffs';
    protected $primaryKey = 'StaffID';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'StaffNUPTK',
        'StaffName',
        'StaffGender',
        'slug',
        'StaffPhoto',
        'StaffGender',
        'StaffPosition',
        'StaffDesc',
    ];

    public function getStaff($slug = false)
    {
        if($slug == false)
        {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('staffs')->like('StaffNUPTK', $keyword)
        ->orLike('StaffName', $keyword)->orLike('StaffGender', $keyword)
        ->orLike('StaffPosition', $keyword);
    }
}