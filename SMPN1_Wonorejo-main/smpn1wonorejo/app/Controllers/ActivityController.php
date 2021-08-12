<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ActivityController extends BaseController
{
	public function indexActivity()
	{
		return view ('Viewer/Activity/index');
	}

	public function detailActivity()
	{
		return view ('Viewer/Activity/detail');
	}
}
