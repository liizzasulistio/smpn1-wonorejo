<?php

namespace App\Controllers;

use App\Models\RuleModel;
use App\Controllers\BaseController;

class RulesController extends BaseController
{
	public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->RuleModel = new RuleModel();
    }

	public function index()
	{
		$data = [
            'title' => 'Tata Tertib',
            // 'rules' => $this->RuleModel->getRule(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/profile/rules', $data);
	}

	public function saveRules()
    {
        if(!$this->validate([
            'RuleField' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tata Tertib SMPN 1 Wonorejo harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/rules')->withInput()->with('validation', $validation);
        }

        $userID = session()->get('UserID');
        $this->RuleModel->save([
            'RuleField' => $this->mRequest->getVar('RuleField'),
            'RuleCat' => 'Tata Tertib',
            'UserID_FK' => $userID,
        ]);
        session()->setFlashdata('message', 'Data tata tertib telah berhasil ditambahkan.');
        return redirect()->to('admin/rules');
    }

	public function updateRules($RuleID)
    {
        if(!$this->validate([
            'RuleField' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi tata tertib SMPN 1 Wonorejo harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/rules')->withInput()->with('validation', $validation);
        }
        $this->RuleModel->save([
            'RuleID' => $RuleID,
            'RuleField' => $this->mRequest->getVar('RuleField'),
            'UserID_FK' => session()->get('UserID'),
        ]);
    
        return redirect()->to('/admin/rules');  
    }

	public function deleteRules($RuleID)
    {
        $data = $this->RuleModel->find($RuleID);
        $this->RuleModel->delete($RuleID);
        session()->setFlashdata('message', 'Data tata tertib telah berhasil dihapus.');
        return redirect()->to('/admin/rules');
    }
}
