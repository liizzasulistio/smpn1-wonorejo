<?php
namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
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
}