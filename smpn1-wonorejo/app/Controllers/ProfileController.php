<?php namespace App\Controllers;

use App\Models\ProfileModel;

class ProfileController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->ProfileModel = new ProfileModel();
        $this->pager = \Config\Services::pager();
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

    public function save()
    {
        $profileCat = $this->mRequest->getVar('ProfileCat');
        if(!$this->validate([
            'ProfileField' => [
                'rules' => 'required',
                'erros' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
                ],
        ]))
        {
            $validation = \Config\Services::validation();
            if($profileCat == 'Sejarah')
                return redirect()->to('admin/sejarah')->withInput()->with('validation', $validation);
        }
        $userID = session()->get('UserID');
        $this->ProfileModel->save([
            'ProfileField' => $this->mRequest->getVar('ProfileField'),
            'ProfileCat' => $profileCat,
            'UserID_FK' => $userID,
        ]);
        session()->setFlashdata('message', 'Data profil sekolah telah berhasil ditambahkan.');
        if($profileCat == 'Sejarah')
            return redirect()->to('admin/sejarah');
        else
        {
            return redirect()->to('admin/visi-misi');
        }
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

    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $visionMission = $this->ProfileModel->search($keyword);
        }
        else
        {
            $visionMission = $this->ProfileModel;
        }
        $currentPage = $this->mRequest->getVar('pager') ? $this->mRequest->getVar('pager') : 1;
        $data = [
            'title' => 'Visi dan Misi',
            'visionMission' => $this->ProfileModel->paginate(10, 'visionMission'),
            'pager' => $visionMission->pager,
            'currentPage' => $currentPage
        ];
        return view('admin/profile/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Profil Sekolah',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/profile/create', $data);
    }

    public function read($ProfileID)
    {
        $data = [
            'title' => 'Detail Visi dan Misi',
            'visionMission' => $this->ProfileModel->getProfile($ProfileID),
        ];
        return view('admin/profile/read', $data);
    }

    public function update($ProfileID)
    {
        $data = [
            'title' => 'Ubah Data Visi dan Misi',
            'visionMission' => $this->ProfileModel->getProfile($ProfileID),
        ];
        
        return view('admin/profile/update', $data);
    }

    public function edit($ProfileID)
    {
        if(!$this->validate([
            'ProfileField' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi visi dan misi harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('/update-visi-misi/'.$this->mRequest->getVar('ProfileID'))->withInput()->with('validation', $validation);
        }
        

        $this->ProfileModel->save([
            'ProfileID' => $ProfileID,
            'ProfileCat' => $this->mRequest->getVar('ProfileCat'),
            'ProfileField' => $this->mRequest->getVar('ProfileField'),
            'UserID_FK' => session()->get('UserID'),
        ]);
        session()->setFlashdata('message', 'Data visi dan misi telah berhasil diubah.');
        return redirect()->to('/admin/visi-misi');
    }

    public function delete($ProfileID)
    {
        $data = $this->ProfileModel->find($ProfileID);
        $this->ProfileModel->delete($ProfileID);
        session()->setFlashdata('message', 'Data visi dan misi telah berhasil dihapus.');
        return redirect()->to('/admin/visi-misi');
    }

}