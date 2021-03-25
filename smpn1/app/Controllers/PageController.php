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

    public function prestasi()
    {
        return view('profile/prestasi');
    }

    public function visi_misi()
    {
        return view('profile/visi_misi');
    }

}
