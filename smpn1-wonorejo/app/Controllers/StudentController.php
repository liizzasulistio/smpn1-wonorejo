<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentController extends BaseController
{
	public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->StudentModel = new StudentModel();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $student = $this->StudentModel->search($keyword);
        }
        else
        {
            $student = $this->StudentModel;
        }
        $currentPage = $this->request->getVar('pager') ? $this->request->getVar('pager') : 1;
        $data = [
            'title' => 'Daftar Siswa',
            // 'tenagaPendidik' => $this->StudentModel->getTeacher(), 
            'student' => $this->StudentModel->paginate(10, 'student'), 
            'pager' => $student->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/students/index', $data);
    }
    
    public function create()
    {
        $data = [
            'title' => 'Tambah Data Siswa',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/students/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'StudentName' => [
                'rules' => 'required|is_unique[students.StudentName]',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'StudentGender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus diisi.'
                ]
            ],
            'StudentClass' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelas harus diisi.'
                ]
            ],
            'StudentClassName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kelas harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/siswa/create')->withInput()->with('validation', $validation);
        }

        chmod('./images/', 0777);
        $photoFile = $this->mRequest->getFile('StudentPhoto');

        if($photoFile->getError() == 4)
        {
            $photoName = '';
           
        }
        else
        {
            $photoName = $photoFile->getRandomName();
            $photoFile->move('./images', $photoName);
    
        }

        // $teacherType = $this->mRequest->getVar('TeacherType');
        $slug = url_title($this->mRequest->getVar('StudentName'), '-', true);
        $this->StudentModel->save([
            'StudentName' => $this->mRequest->getVar('StudentName'),
            'slug' => $slug,
            'StudentPhoto' => $photoName,
            'StudentGender' => $this->mRequest->getVar('StudentGender'),
            'StudentClass' => $this->mRequest->getVar('StudentClass'),
            'StudentClassName' => $this->mRequest->getVar('StudentClassName'),
            //'TeacherType' => 'Guru',
        ]);
        session()->setFlashdata('message', 'Data siswa berhasil ditambahkan.');
        return redirect()->to('admin/daftar-siswa');
    }

    public function read($slug)
    {
        $data = [
            'title' => 'Detail Siswa',
            'student' => $this->StudentModel->getStudent($slug),
        ];
        return view('admin/students/read', $data);
    }

    public function update($slug)
    {
        $data = [
            'title' => 'Ubah Data Siswa',
            'student' => $this->StudentModel->getStudent($slug),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/students/update', $data);
    }

    public function edit($StudentID)
    {
        $oldStudent = $this->StudentModel->getStudent($this->mRequest->getVar('slug'));
        
        if($oldStudent['StudentName'] == $this->mRequest->getVar('StudentName'))
        {
            $nameRule = 'required';
        }
        else
        {
            $nameRule = 'required|is_unique[students.StudentName]';
        }

        if(!$this->validate([
            'StudentName' => [
                'rules' => $nameRule,
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'StudentGender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin harus diisi.'
                ]
            ],
            'StudentClass' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelas harus diisi.'
                ]
            ],
            'StudentClassName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kelas harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('/update-siswa/'.$this->mRequest->getVar('slug'))->withInput()->with('validation', $validation);
        }
        $photoFile = $this->mRequest->getFile('StudentPhoto');
        if($photoFile->getError() != 4)
        {
            $data = $this->StudentModel->find($StudentID);
            $imageFile = $data['StudentPhoto'];
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
            $this->StudentModel->save([
                'StudentID' => $StudentID,
                'StudentPhoto' => $photoName,   
            ]);
        }

        // $teacherType = $this->mRequest->getVar('TeacherType');
        $slug = url_title($this->mRequest->getVar('StudentName'), '-', true);

        $this->StudentModel->save([
            'StudentID' => $StudentID,
            'StudentName' => $this->mRequest->getVar('StudentName'),
            'slug' => $slug,
            'StudentGender' => $this->mRequest->getVar('StudentGender'),
            'StudentClass' => $this->mRequest->getVar('StudentClass'),
            'StudentClassName' => $this->mRequest->getVar('StudentClassName'),
           
        ]);
        session()->setFlashdata('message', 'Data siswa telah diubah.');
        return redirect()->to('admin/daftar-siswa');
    }

    public function delete($StudentID)
    {
        $data = $this->StudentModel->find($StudentID);
        $this->StudentModel->delete($StudentID);
        session()->setFlashdata('message', 'Data siswa telah berhasil dihapus.');
        return redirect()->to('admin/daftar-siswa');
    }
}
