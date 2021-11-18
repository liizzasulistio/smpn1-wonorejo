<?php namespace App\Models;
use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'StudentID';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'StudentName',
        'slug',
        'StudentPhoto',
        'StudentGender',
        'StudentClass',
        'StudentClassName',
    ];

    public function getStudent($slug = false)
    {
        if($slug == false)
        {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('students')->like('StudentName', $keyword)
        ->orLike('StudentClass', $keyword);
    }

    // public function getHeadmaster()
    // {
    //     return $this->db
    //     ->query("SELECT * FROM teachers WHERE TeacherType = 'Kepala Sekolah'")
    //     ->getResultArray();
    // }
}