<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AcademicController extends BaseController
{
	public function indexRules()
    {
        return view('Viewer/Academic/rules');
    }

    public function indexStudentsList()
    {
        return view('Viewer/Academic/studentsList');
    }

    public function indexTataTertib()
    {
        return view('Viewer/Academic/codeOfConduct');
    }

    public function indexCalender()
    {
        return view('Viewer/Academic/calender');
    }
}
