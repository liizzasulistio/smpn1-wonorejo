<?php

namespace App\Controllers;

class AdiwiyataController extends BaseController
{
    public function index()
    {
        return view('activity/adiwiyata/index');
    }

    public function detail()
    {
        return view('activity/adiwiyata/detail');
    }
}