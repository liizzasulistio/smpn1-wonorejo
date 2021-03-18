<?php

namespace App\Controllers;

class ExtraController extends BaseController
{
    public function index()
    {
        return view('activity/extracurricular/index');
    }

    public function detail()
    {
        return view('activity/extracurricular/detail');
    }
}
