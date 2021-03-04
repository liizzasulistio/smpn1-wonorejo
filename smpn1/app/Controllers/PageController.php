<?php namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        return view('profile_kepsek');
    }
}