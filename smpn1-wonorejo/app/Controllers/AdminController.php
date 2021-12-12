<?php
namespace App\Controllers;

use App\Models\ActivityModel;
use App\Models\CommentModel;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->ActivityModel = new ActivityModel();
        $this->CommentModel = new CommentModel();
        $this->UserModel = new UserModel();
        $this->pager = \Config\Services::pager();
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'commentCount' => $this->CommentModel->CountComment(),
            'activityCount' => $this->ActivityModel->CountActivity(),
            'userCount' => $this->UserModel->CountUser(),
            'activityLatest' => $this->ActivityModel->getLatestActivity(),
            'commentLatest' => $this->CommentModel->getLatestComment(),
        ];
        return view('admin/dashboard', $data);
    }
}