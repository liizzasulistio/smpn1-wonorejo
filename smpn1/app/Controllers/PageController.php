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

    public function profile_tu()
    {
        return view('profile/TU');
    }

    public function history()
    {
        return view('profile/history');
    }

    public function visi()
    {
        return view('profile/visi');
    }

    public function misi()
    {
        return view('profile/misi');
    }

}
