<?php namespace App\Models;
use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table='activities';
    protected $primaryKey = 'ActivityID';
    protected $useTimestamps = true;
    protected $allowedFields = 
    [
        'ActivityTitle',
        'slug',
        'ActivityText',
        'ActivityImage',
        'TagItem',
        'UserID_FK'
    ];

    public function getActivity($slug = false)
    {
        if($slug == false)
        {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();

    }
    
}