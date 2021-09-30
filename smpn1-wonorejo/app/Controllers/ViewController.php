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

    public function staffIndex()
    {
        
    }

    public function staffDetail()
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