<?php
namespace App\Controllers;

use App\Models\TeacherModel;
use App\Models\RuleModel;
use App\Models\StudentModel;

class ViewController extends BaseController
{

    public function __construct()
    {
        $this->TeacherModel = new TeacherModel();  
        $this->RuleModel = new RuleModel();  
        $this->StudentModel = new StudentModel();  
    }

    //showing landing page to viewer
    public function index()
    {
        $data = [
            'title' => 'SMPN 1 WONOREJO',
        ];
        return view('index', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'Sejarah',
        ];
        return view('viewer/profile/history', $data);
    }

    public function visionMission()
    {
        $data = [
            'title' => 'Visi dan Misi',
        ];
        return view('viewer/profile/vision-mission', $data);
    }

    // For Viewer
    public function activityIndex()
    {
        $data = [
            'title' => 'Kegiatan',
        ];
        return view('viewer/activity/activity', $data);
    }
  
    public function activityDetail()
    {
        $data = [
            'title' => 'Kegiatan',
        ];
        return view('viewer/activity/activity_detail', $data);
    }

    public function headmaster()
    {
        $data = [
            'title' => 'Kepala Sekolah',
            'teacher' => $this->TeacherModel->getTeacher(),
        ];
        return view('viewer/profile/headmaster', $data);
    }

    public function teacherIndex()
    {
        $data = [
            'title' => 'Tenaga Pendidik',
            'teacher' => $this->TeacherModel->getTeacher(),
        ];
        return view('viewer/profile/teacher', $data);
    }

    public function teacherDetail($slug)
    {
        $data = [
            'title' => 'Detail Guru',
            'teacher' => $this->TeacherModel->getTeacher($slug),
        ];
        return view('viewer/profile/teacher_detail', $data);
    }

    public function StaffIndex()
    {
        
    }

    public function StaffDetail()
    {

    }

    public function rules()
    {
        $data = [
            'title' => 'Tata Tertib',
            'rules' => $this->RuleModel->getRule(),
        ];
        return view('viewer/academic/rules', $data);
    }

    public function students()
    {
        $data = [
            'title' => 'Daftar Siswa',
            'student' => $this->StudentModel->getStudent(),
        ];
        return view('viewer/academic/students', $data);
    }

    public function galleryIndex()
    {
        $data = [
            'title' => 'Galeri'
        ];
        return view('viewer/gallery', $data);
    }

}