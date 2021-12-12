<?php namespace App\Models;
use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'CommentID';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'CommentText',
        'CommentAuthor',
        'Status',
        'ActivityID_FK',
    ];

    public function getComment($slug = false)
    {
        if($slug == false)
        {
            return $this->db->table('comments')
            ->join('activities', 'comments.ActivityID_FK = activities.ActivityID')
            ->get()
            ->getResult();
        }
        return $this->table('comments')
        ->join('activities', 'comments.ActivityID_FK = activities.ActivityID')
        ->where(['slug' => $slug])->get()->getResultArray();
    }

    public function search($keyword)
    {
        return $this->table('comments c')
        ->join('activities a', 'comments.ActivityID_FK = a.ActivityID')
        ->like('a.ActivityTitle', $keyword)->orLike('CommentAuthor', $keyword)
        ->orLike('Status', $keyword);
    }


    public function countComment()
    {
        return $this->builder()->countAllResults(false);
    }

    public function getLatestComment()
    {
        return $this->builder()
        ->join('activities a', 'comments.ActivityID_FK = a.ActivityID')
        ->orderBy('comments.created_at', 'ASC')->limit(3)->get()->getResultArray();
    }
}