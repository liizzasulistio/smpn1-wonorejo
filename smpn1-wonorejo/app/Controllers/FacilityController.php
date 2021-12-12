<?php
namespace App\Controllers;

use App\Models\FacilityModel;

class FacilityController extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->FacilityModel = new FacilityModel();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $facility = $this->FacilityModel->search($keyword);
        }
        else
        {
            $facility = $this->FacilityModel;
        }
        // dd($facility);
        // var_dump($facility);
        $currentPage = $this->mRequest->getVar('pager') ? $this->mRequest->getVar('pager') : 1;
        $data = [
            'title' => 'Fasilitas',
            // 'tenagaPendidik' => $this->FacilityModel->getFacility(), 
            'facility' => $this->FacilityModel->paginate(10, 'facility'), 
            'pager' => $facility->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/facility/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Fasilitas',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/facility/create', $data);
    }

    public function save()
    {
        $teacherType = $this->mRequest->getVar('TeacherType');
        if(!$this->validate([
            'FacilityName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama fasilitas IP harus diisi.'
                ]
            ],
            'FacilityDesc' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi fasilitas harus diisi.'
                ]
            ],

            
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/fasilitas/create')->withInput()->with('validation', $validation);
        
        }

        chmod('./images/', 0777);
        $photoFile = $this->mRequest->getFile('FacilityImage');

        if($photoFile->getError() == 4)
        {
            $photoName = '';
           
        }
        else
        {
            $photoName = $photoFile->getRandomName();
            $photoFile->move('./images', $photoName);
    
        }
        $this->FacilityModel->save([
            'FacilityName' => $this->mRequest->getVar('FacilityName'),
            'FacilityImage' => $photoName,
            'FacilityDesc' => $this->mRequest->getVar('FacilityDesc'),
        ]);
        session()->setFlashdata('message', 'Data fasilitas telah berhasil ditambahkan.');
        return redirect()->to('admin/fasilitas');

    }

    public function read($FacilityID)
    {
        $data = [
            'title' => 'Detail Fasilitas',
            'facility' => $this->FacilityModel->getFacility($FacilityID),
        ];
        return view('admin/facility/read', $data);
    }

    public function update($FacilityID)
    {
        $data = [
            'title' => 'Ubah Data Fasilitas',
            'facility' => $this->FacilityModel->getFacility($FacilityID),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/facility/update', $data);
    }

    public function edit($FacilityID)
    {
        if(!$this->validate([
            'FacilityName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/fasilitas/update/'.$this->mRequest->getVar('FacilityID'))->withInput()->with('validation', $validation);
        
        }
        $photoFile = $this->mRequest->getFile('FacilityImage');
        if($photoFile->getError() != 4)
        {
            $data = $this->FacilityModel->find($FacilityID);
            $imageFile = $data['FacilityImage'];
            if($imageFile)
            {
            $imagePath = './images/'.$imageFile;
        
            if(file_exists($imagePath))
            {
                chmod($imagePath, 0777);
                unlink($imagePath);
            }
        }

            $photoName = $photoFile->getRandomName();
            $photoFile->move('./images', $photoName);
            $this->FacilityModel->save([
                'FacilityID' => $FacilityID,
                'FacilityImage' => $photoName,   
                ]);
        }
        $this->FacilityModel->save([
            'FacilityID' => $FacilityID,
            'FacilityName' => $this->mRequest->getVar('FacilityName'),
            'FacilityID' => $FacilityID,
            'FacilityDesc' => $this->mRequest->getVar('FacilityDesc'),
        ]);

        session()->setFlashdata('message', 'Data fasilitas telah berhasil diubah.');
        return redirect()->to('admin/fasilitas');

    }

    public function delete($FacilityID)
    {
        $this->FacilityModel->find($FacilityID);
        $this->FacilityModel->delete($FacilityID);
        session()->setFlashdata('message', 'Data fasilitas telah berhasil dihapus.');
        return redirect()->to('admin/fasilitas');
    }
}