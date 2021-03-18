<?php

namespace App\Controllers;

class CreationController extends BaseController
{
    public function index()
    {
        return view('activity/creation/index');
    }

    public function detail()
    {
        return view('activity/creation/detail');
    }
}
