<?php

namespace App\Controllers;

class AkademikController extends BaseController
{
    public function rules()
    {
        return view('akademik/akademikRules');
    }

    public function students()
    {
        return view('akademik/daftar-siswa');
    }

    public function tatatertib()
    {
        return view('akademik/tata-tertib');
    }

    // public function detail()
    // {
    //     return view('activity/extracurricular/detail');
    // }
}
