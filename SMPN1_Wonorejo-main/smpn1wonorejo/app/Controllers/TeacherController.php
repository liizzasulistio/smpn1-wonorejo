<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TeacherController extends BaseController
{
	public function indexTeacher()
    {
        return view('Viewer/Profile/Teacher/index');
    }

    public function detailTeacher()
    {
        return view('Viewer/Profile/Teacher/detail');
    }
}
