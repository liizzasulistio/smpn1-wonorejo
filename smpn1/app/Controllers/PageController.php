<?php namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        return view('profile/kepalaSekolah');
    }

    public function adiwiyata()
    {
        return view('kegiatan/adiwiyata/index');
    }

    public function detail()
    {
        return view('kegiatan/adiwiyata/detail');
    }
}
