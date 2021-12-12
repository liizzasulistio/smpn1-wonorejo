<?php
namespace App\Controllers;

use App\Models\StaffModel;

class StaffController extends BaseController
{
    public function __construct()
    {
        helper('form');
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

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Tenaga Kependidikan',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/staff/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'StaffNUPTK' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NUPTK harus diisi.'
                ]
            ],
            'StaffName' => [
                'rules' => 'required|is_unique[staffs.StaffName]',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'StaffGender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin harus diisi.'
                ]
            ],
            'StaffPosition' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Posisi harus diisi.'
                ]
            ],
            
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/tenaga-kependidikan/create')->withInput()->with('validation', $validation);
           
        }

        chmod('./images/', 0777);
        $photoFile = $this->mRequest->getFile('StaffPhoto');

        if($photoFile->getError() == 4)
        {
            $photoName = '';
           
        }
        else
        {
            $photoName = $photoFile->getRandomName();
            $photoFile->move('./images', $photoName);
        }
      
        $slug = url_title($this->mRequest->getVar('StaffName'), '-', true);
        $this->StaffModel->save([
            'StaffNUPTK' => $this->mRequest->getVar('StaffNUPTK'),
            'StaffName' => $this->mRequest->getVar('StaffName'),
            'slug' => $slug,
            'StaffPhoto' => $photoName,
            'StaffGender' => $this->mRequest->getVar('StaffGender'),
            'StaffPosition' => $this->mRequest->getVar('StaffPosition'),
            'StaffDesc' => $this->mRequest->getVar('StaffDesc'),
        ]);
        session()->setFlashdata('message', 'Data tenaga kependidikan telah berhasil ditambahkan.');
        return redirect()->to('admin/tenaga-kependidikan');
    }

    public function read($slug)
    {
        $data = [
            'title' => 'Detail Tenaga Kependidikan',
            'staff' => $this->StaffModel->getStaff($slug),
        ];
        return view('admin/staff/read', $data);
    }

    public function update($slug)
    {
        $data = [
            'title' => 'Ubah Data Tenaga Kependidikan',
            'staff' => $this->StaffModel->getStaff($slug),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/staff/update', $data);
    }

    public function edit($StaffID)
    {
        $oldStaff = $this->StaffModel->getStaff($this->mRequest->getVar('slug'));
        if($oldStaff['StaffName'] == $this->mRequest->getVar('StaffName'))
        {
            $nameRule = 'required';
        }
        else
        {
            $nameRule = 'required|is_unique[staffs.StaffName]';
        }

        if(!$this->validate([
            'StaffNUPTK' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NUPTK harus diisi.'
                ]
            ],
            'StaffName' => [
                'rules' => $nameRule,
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'StaffPosition' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Posisi harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tenaga-kependidikan/update/'.$this->mRequest->getVar('slug'))->withInput()->with('validation', $validation);
        }
        $photoFile = $this->mRequest->getFile('StaffPhoto');
        if($photoFile->getError() != 4)
        {
            $data = $this->StaffModel->find($StaffID);
            $imageFile = $data['StaffPhoto'];
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
            $this->StaffModel->save([
                'StaffID' => $StaffID,
                'StaffPhoto' => $photoName,   
                ]);
        }

        $slug = url_title($this->mRequest->getVar('StaffName'), '-', true);
        $this->StaffModel->save([
            'StaffID' => $StaffID,
            'StaffNUPTK' => $this->mRequest->getVar('StaffNUPTK'),
            'StaffName' => $this->mRequest->getVar('StaffName'),
            'slug' => $slug,
            'StaffPosition' => $this->mRequest->getVar('StaffPosition'),
            'StaffGender' => $this->mRequest->getVar('StaffGender'),
            'StaffDesc' => $this->mRequest->getVar('StaffDesc'),
        ]);

        session()->setFlashdata('message', 'Data tenaga kependidikan telah berhasil diubah.');
        return redirect()->to('admin/tenaga-kependidikan');

    }

    public function delete($StaffID)
    {
        $this->StaffModel->find($StaffID);
        $this->StaffModel->delete($StaffID);
        session()->setFlashdata('message', 'Data tenaga kependidikan telah berhasil dihapus.');
        return redirect()->to('admin/tenaga-kependidikan');
    }

}
