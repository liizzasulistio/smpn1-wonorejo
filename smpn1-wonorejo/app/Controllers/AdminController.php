<?php
namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/dashboard', $data);
    }
}