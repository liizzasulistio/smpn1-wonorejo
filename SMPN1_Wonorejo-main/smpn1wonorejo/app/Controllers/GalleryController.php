<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GalleryController extends BaseController
{
	public function indexGallery()
	{
		return view ('Viewer/Gallery/index');
	}
}
