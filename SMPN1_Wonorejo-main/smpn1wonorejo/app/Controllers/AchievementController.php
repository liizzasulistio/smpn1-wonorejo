<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AchievementController extends BaseController
{
	public function indexAchievement()
    {
        return view('Viewer/Profile/Achievement/index');
    }

    public function detailAchievement()
    {
        return view('Viewer/Profile/Achievement/detail');
    }
}
