<?php
namespace App\Controllers;

use App\Models\StaffModel;

class StaffController extends BaseController
{
    public function __construct()
    {
        $this->mRequest = service('request');
        $this->StaffModel = new StaffModel();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $staff = $this->StaffModel->search($keyword);
        }
        else
        {
            $staff = $this->StaffModel;
        }
        $currentPage = $this->request->getVar('page_staff') ? $this->request->getVar('page_staff') : 1;
        $data = [
            'title' => 'Tenaga Kependidikan',
            'staff' => $this->StaffModel->paginate(10, 'staff'),
            'pager' => $staff->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/staff/index', $data);
    }
}
