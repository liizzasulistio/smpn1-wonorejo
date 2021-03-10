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

    public function profile_pendidik()
    {
        return view('profile/pendidik');
    }

    public function adiwiyata()
    {
        return view('kegiatan/adiwiyata/index');
    }

    public function detail_adiwiyata()
    {
        return view('kegiatan/adiwiyata/detail');
    }

    public function ekstra()
    {
        return view('kegiatan/ekstrakulikuler/index');
    }

    public function detail_ekstra()
    {
        return view('kegiatan/ekstrakulikuler/detail');
    }
}
