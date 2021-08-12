<?php

namespace App\Controllers;

class TeachersController extends BaseController
{
    public function index()
    {
        return view('profile/teachers/index');
    }

    public function detail()
    {
        return view('profile/teachers/detail');
    }
}
