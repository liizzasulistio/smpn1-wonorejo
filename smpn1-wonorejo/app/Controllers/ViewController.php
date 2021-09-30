<?php
namespace App\Controllers;

use App\Models\TeacherModel;

class ViewController extends BaseController
{

    public function __construct()
    {
        $this->TeacherModel = new TeacherModel();
    }

    //showing landing page to viewer
    public function index()
    {
        $data = [
            'title' => 'SMPN 1 WONOREJO',
        ];
        return view('index', $data);
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

    public function galleryIndex()
    {
        $data = [
            'title' => 'Galeri'
        ];
        return view('viewer/gallery', $data);
    }

}