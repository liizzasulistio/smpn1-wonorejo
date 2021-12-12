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
            'rules' => $this->RuleModel->getRule(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/profile/rules', $data);
	}

	public function saveRules()
    {
        if(!$this->validate([
            'RuleTitle' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul tata tertib SMPN 1 Wonorejo harus diisi.'
                ]
            ],
            'RuleField' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tata Tertib SMPN 1 Wonorejo harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/tata-tertib')->withInput()->with('validation', $validation);
        }

        // $userID = session()->get('UserID');
        $this->RuleModel->save([
            'RuleTitle' => $this->mRequest->getVar('RuleTitle'),
            'RuleField' => $this->mRequest->getVar('RuleField'),

        ]);
        session()->setFlashdata('message', 'Data tata tertib telah berhasil ditambahkan.');
        return redirect()->to('admin/tata-tertib');
    }

	public function updateRules($RuleID)
    {
        if(!$this->validate([
            'RuleTitle' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul tata tertib SMPN 1 Wonorejo harus diisi.'
                ]
            ],
            'RuleField' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi tata tertib SMPN 1 Wonorejo harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/tata-tertib')->withInput()->with('validation', $validation);
        }
        $this->RuleModel->save([
            'RuleID' => $RuleID,
            'RuleTitle' => $this->mRequest->getVar('RuleTitle'),
            'RuleField' => $this->mRequest->getVar('RuleField'),
        ]);
    
        return redirect()->to('admin/tata-tertib');  
    }

	public function deleteRules($RuleID)
    {
        // $data = $this->RuleModel->find($RuleID);
        $this->RuleModel->delete($RuleID);
        session()->setFlashdata('message', 'Data tata tertib telah berhasil dihapus.');
        return redirect()->to('admin/tata-tertib');
    }
}
