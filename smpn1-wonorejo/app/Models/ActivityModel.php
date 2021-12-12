<?php namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

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
           // return $this->findAll();
          return $this->db->table('activities')
           ->join('users', 'activities.UserID_FK = users.UserID')
           ->get()->getResultArray();
        }
        return $this->table('activities a')
        ->join('users u', 'activities.UserID_FK = u.UserID')->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('activities a')
        ->join('users u', 'activities.UserID_FK = u.UserID')
        ->like('ActivityTitle', $keyword)->orLike('u.UserName', $keyword)
        ->orLike('ActivityText', $keyword)->orLike('TagItem', $keyword);
        // return $this->db
        // ->query("SELECT * FROM activities INNER JOIN users activities.UserID_FK = users.UserID
        // WHERE ActivityTitle LIKE '.$keyword.' OR ActivityText LIKE '.$keyword.' 
        // OR TagItem LIKE '.$keyword.' ");
    }

    public function countActivity()
    {
        return $this->builder()->countAllResults(false);
    }

    public function getLatestActivity()
    {
        return $this->builder()
        ->join('users u', 'activities.UserID_FK = u.UserID')
        ->orderBy('activities.updated_at', 'ASC')->limit(3)->get()->getResultArray();
    }
}