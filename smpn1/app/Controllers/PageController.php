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
        return view('profile/kepalaSekolah');
    }

    public function adiwiyata()
    {
        return view('kegiatan/adiwiyata');
    }

    public function detail()
    {
        return view('kegiatan/detailArtikel');
    }
}
