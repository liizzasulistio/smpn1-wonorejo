<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function index2()
    {
        $data = [
            'title' => 'SMPN 1 WONOREJO',
        ];
        return view('index', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('page/dashboard', $data);
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

    public function fasilitas()
    {
        return view('profile/fasilitas');
    }
    
    public function visi_misi()
    {
        return view('profile/visi_misi');
    }

    public function seleksippdb()
    {
        return view('ppdb/hasil-seleksi');
    }

}
