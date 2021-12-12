<?php namespace App\Models;
use CodeIgniter\Model;

class FacilityModel extends Model
{
    protected $table = 'facilities';
    protected $primaryKey = 'FacilityID';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'FacilityName', 
        'FacilityDesc', 
        'FacilityImage'
    ];

    public function getFacility($FacilityID = false)
    {
        if($FacilityID == false)
        {
            return $this->findAll();
        }
        return $this->where(['FacilityID' == $FacilityID])->first();
    }

    public function search($keyword)
    {
        return $this->table('facilities')->like('FacilityName', $keyword)
        ->orLike('FacilityDesc', $keyword);
    }
}