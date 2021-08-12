<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
	public function indexFacilities()
    {
        return view('Viewer/Profile/facilities');
    }

	public function indexHeadmaster()
    {
        return view('Viewer/Profile/headmasterProfile');
    }

	public function indexHistory()
    {
        return view('Viewer/Profile/history');
    }

	public function indexTendikProfile()
    {
        return view('Viewer/Profile/tendikProfile');
    }

	public function indexVisionAndMission()
    {
        return view('Viewer/Profile/visionAndMission');
    }
}
