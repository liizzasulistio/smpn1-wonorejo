<?php
namespace App\Controllers;

class ViewController extends BaseController
{
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
        return view('viewer/activity/activity_index', $data);
    }
  
    public function activityDetail()
    {
  
    }

}