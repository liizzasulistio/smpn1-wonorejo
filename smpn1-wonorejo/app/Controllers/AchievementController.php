<?php
namespace App\Controllers;

use App\Models\AchievementModel;

class AchievementController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->AchievementModel = new AchievementModel();
        $this->paget = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $achievement = $this->AchievementModel->search($keyword);
        }
        else
        {
            $achievement = $this->AchievementModel;
        }
        $currentPage = $this->mRequest->getVar('pager') ? $this->mRequest->getVar('pager') : 1;
        $data = [
            'title' => 'Prestasi',
            'achievement' => $this->AchievementModel->paginate(10, 'achievement'), 
            'pager' => $achievement->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/achievement/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Prestasi',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/achievement/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'ContestName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lomba harus diisi.'
                ]
            ],
            'ContestDate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu pelaksanaan lomba harus diisi.'
                ]
            ],
            'Championship' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kejuaraan lomba harus diisi.'
                ]
            ],
            'ContestLevel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tingkat lomba harus diisi.'
                ]
            ],
            'Organizer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Penyelenggara lomba harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/prestasi/create')->withInput()->with('validation', $validation);
        
        }
        $this->AchievementModel->save([
            'ContestName' => $this->mRequest->getVar('ContestName'),
            'ContestDate' => $this->mRequest->getVar('ContestDate'),
            'Championship' => $this->mRequest->getVar('Championship'),
            'ContestLevel' => $this->mRequest->getVar('ContestLevel'),
            'Organizer' => $this->mRequest->getVar('Organizer'),
        ]);
        session()->setFlashdata('message', 'Data prestasi telah berhasil ditambahkan.');
        return redirect()->to('admin/prestasi');
    }

    public function update($AchievementID)
    {
        $data = [
            'title' => 'Ubah Data Prestasi',
            'achievement' => $this->AchievementModel->getAchievement($AchievementID),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/achievement/update', $data);
    }

    public function edit($AchievementID)
    {
        if(!$this->validate([
            'ContestName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lomba harus diisi.'
                ]
            ],
            'ContestDate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu pelaksanaan lomba harus diisi.'
                ]
            ],
            'Championship' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kejuaraan lomba harus diisi.'
                ]
            ],
            'ContestLevel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tingkat lomba harus diisi.'
                ]
            ],
            'Organizer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Penyelenggara lomba harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/prestasi/update/'.$this->mRequest->getVar('AchievementID'))->withInput()->with('validation', $validation);
        }
        $this->FacilityModel->save([
            'AchievementID' => $AchievementID,
            'ContestName' => $this->mRequest->getVar('ContestName'),
            'ContestDate' => $this->mRequest->getVar('ContestDate'),
            'Championship' => $this->mRequest->getVar('Championship'),
            'ContestLevel' => $this->mRequest->getVar('ContestLevel'),
            'Organizer' => $this->mRequest->getVar('Organizer'),
        ]);

        session()->setFlashdata('message', 'Data prestasi telah berhasil diubah.');
        return redirect()->to('admin/prestasi');

    }


}