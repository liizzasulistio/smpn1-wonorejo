<?php
namespace App\Controllers;
use App\Models\Gallery;

class GalleryController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Gallery',
        ];
        return view('admin/gallery/index', $data);
    }
}