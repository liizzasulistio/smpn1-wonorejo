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
        'TeacherGender',
        'TeacherType',
        'TeacherDesc',
    ];

    public function getTeacher($slug = false)
    {
        if($slug == false)
        {
            return $this->db
            ->query("SELECT * FROM teachers WHERE TeacherType = 'Guru'")
            ->getResultArray();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('teachers')->like('TeacherNIP', $keyword)
        ->orLike('TeacherName', $keyword)->orLike('TeacherSubject', $keyword);
    }

    public function getHeadmaster()
    {
        return $this->db
        ->query("SELECT * FROM teachers WHERE TeacherType = 'Kepala Sekolah'")
        ->getResultArray();
    }


}