<?php
namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\FacilityModel;
use App\Models\TeacherModel;
use App\Models\ActivityModel;
use App\Models\CommentModel;

class ViewController extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->TeacherModel = new TeacherModel();
        $this->ProfileModel = new ProfileModel();
        $this->FacilityModel = new FacilityModel();
        $this->ActivityModel = new ActivityModel();
        $this->CommentModel = new CommentModel();

    }

    //showing landing page to viewer
    public function index()
    {
        $data = [
            'title' => 'SMPN 1 WONOREJO',
            'profile' => $this->ProfileModel->getHistory(),
        ];
        return view('index', $data);
    }

    // Profile Menu
    public function history()
    {
        $data = [
            'title' => 'Sejarah',
            'history' => $this->ProfileModel->getHistory(),
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

    public function facility()
    {
        $data = [
            'title' => 'Fasilitas',
            'facility' => $this->FacilityModel->getFacility(),
        ];
        return view('viewer/facility/facility', $data);
    }



    public function activityIndex()
    {
        $data = [
            'title' => 'Kegiatan',
        ];
        return view('viewer/activity/activity', $data);
    }
  
    public function activityDetail($slug)
    {
        $data = [
            'title' => 'Kegiatan',
            'activity' => $this->ActivityModel->getActivity($slug),
            'comment' => $this->CommentModel->getComment($slug),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data);
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