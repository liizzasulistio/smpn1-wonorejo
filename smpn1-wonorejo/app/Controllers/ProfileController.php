<?php namespace App\Controllers;

use App\Models\ProfileModel;

class ProfileController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->ProfileModel = new ProfileModel();
    }

    public function history()
    {
        $data = [
            'title' => 'Sejarah',
            'history' => $this->ProfileModel->getHistory(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/profile/history', $data);
    }

    public function saveHistory()
    {
        if(!$this->validate([
            'ProfileField' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi sejarah SMPN 1 Wonorejo harus diisi.'
                ]
                ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/sejarah')->withInput()->with('validation', $validation);
        }

        $userID = session()->get('UserID');
        $this->ProfileModel->save([
            'ProfileField' => $this->mRequest->getVar('ProfileField'),
            'ProfileCat' => 'Sejarah',
            'UserID_FK' => $userID,
        ]);
        session()->setFlashdata('message', 'Data sejarah telah berhasil ditambahkan.');
        return redirect()->to('admin/sejarah');
    }

    public function updateHistory($ProfileID)
    {
        if(!$this->validate([
            'ProfileField' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi sejarah SMPN 1 Wonorejo harus diisi.'
                ]
                ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/sejarah')->withInput()->with('validation', $validation);
        }
        $this->ProfileModel->save([
            'ProfileID' => $ProfileID,
            'ProfileField' => $this->mRequest->getVar('ProfileField'),
            'UserID_FK' => session()->get('UserID'),
        ]);
    
        return redirect()->to('/admin/sejarah');  
    }

    public function deleteHistory($ProfileID)
    {
        $data = $this->ProfileModel->find($ProfileID);
        $this->ProfileModel->delete($ProfileID);
        session()->setFlashdata('message', 'Data sejarah telah berhasil dihapus.');
        return redirect()->to('/admin/sejarah');
    }
}