<?php namespace App\Models;
use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'TeacherID';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'TeacherNIP',
        'TeacherName',
        'slug',
        'TeacherPhoto',
        'TeacherSubject',
        'TeacherType',
        'TeacherDesc',
    ];

    public function getTeacher($slug = false)
    {
        if($slug == false)
        {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();

    }



}