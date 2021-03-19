<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        return view('profile/headmaster');
    }

    public function profile_pendidik()
    {
        return view('profile/teachers');
    }

}
