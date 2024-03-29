<?php
namespace App\Controllers;

use App\Models\TeacherModel;

class TeacherController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->TeacherModel = new TeacherModel();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $teacher = $this->TeacherModel->search($keyword);
        }
        else
        {
            $teacher = $this->TeacherModel;
        }
        // dd($teacher);
        // var_dump($teacher);
        $currentPage = $this->mRequest->getVar('pager') ? $this->mRequest->getVar('pager') : 1;
        $data = [
            'title' => 'Tenaga Pendidik',
            // 'tenagaPendidik' => $this->TeacherModel->getTeacher(), 
            'teacher' => $this->TeacherModel->paginate(10, 'teacher'), 
            'pager' => $teacher->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/teacher/index', $data);
    }

    public function indexHeadmaster()
    {
        $data = [
           'title' => 'Kepala Sekolah',
           'teacher' => $this->TeacherModel->getHeadmaster(),
           'validation' => \Config\Services::validation(),
        ];
        return view('admin/profile/headmaster', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Guru',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/teacher/create', $data);
    }

    public function save()
    {
        $teacherType = $this->mRequest->getVar('TeacherType');
        if(!$this->validate([
            'TeacherNIP' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP harus diisi.'
                ]
            ],
            'TeacherName' => [
                'rules' => 'required|is_unique[teachers.TeacherName]',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'TeacherSubject' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mata Pelajaran harus diisi.'
                ]
            ],
            'TeacherGender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin harus diisi.'
                ]
            ],
            
        ]))
        {
            $validation = \Config\Services::validation();
            if($teacherType == 'Guru')
                return redirect()->to('admin/tenaga-pendidik/create')->withInput()->with('validation', $validation);
            if($teacherType == 'Kepala Sekolah')
                return redirect()->to('admin/kepala-sekolah')->withInput()->with('validation', $validation);
        }

        chmod('./images/', 0777);
        $photoFile = $this->mRequest->getFile('TeacherPhoto');

        if($photoFile->getError() == 4)
        {
            $photoName = '';
           
        }
        else
        {
            $photoName = $photoFile->getRandomName();
            $photoFile->move('./images', $photoName);
    
        }

      
        $slug = url_title($this->mRequest->getVar('TeacherName'), '-', true);
        $this->TeacherModel->save([
            'TeacherNIP' => $this->mRequest->getVar('TeacherNIP'),
            'TeacherName' => $this->mRequest->getVar('TeacherName'),
            'slug' => $slug,
            'TeacherPhoto' => $photoName,
            'TeacherSubject' => $this->mRequest->getVar('TeacherSubject'),
            'TeacherGender' => $this->mRequest->getVar('TeacherGender'),
            'TeacherDesc' => $this->mRequest->getVar('TeacherDesc'),
            'TeacherType' => $teacherType,
        ]);
        session()->setFlashdata('message', 'Data tenaga pendidik telah berhasil ditambahkan.');
        if($teacherType == 'Guru')
            return redirect()->to('admin/tenaga-pendidik');
        if($teacherType == 'Kepala Sekolah')
            return redirect()->to('admin/kepala-sekolah');
    }

    public function read($slug)
    {
        $data = [
            'title' => 'Detail Tenaga Pendidik',
            'teacher' => $this->TeacherModel->getTeacher($slug),
        ];
        return view('admin/teacher/read', $data);
    }
    
    public function update($slug)
    {
        $data = [
            'title' => 'Ubah Data Guru',
            'teacher' => $this->TeacherModel->getTeacher($slug),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/teacher/update', $data);
    }

    public function updateHeadmaster($slug)
    {
        $data = [
            'title' => 'Ubah Data Guru',
            'teacher' => $this->TeacherModel->getTeacher($slug),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/profile/headmaster_update', $data);
    }

    public function edit($TeacherID)
    {
        $oldTeacher = $this->TeacherModel->getTeacher($this->mRequest->getVar('slug'));
        $teacherType = $this->mRequest->getVar('TeacherType');
        if($oldTeacher['TeacherName'] == $this->mRequest->getVar('TeacherName'))
        {
            $nameRule = 'required';
        }
        else
        {
            $nameRule = 'required|is_unique[teachers.TeacherName]';
        }

        if(!$this->validate([
            'TeacherNIP' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP harus diisi.'
                ]
            ],
            'TeacherName' => [
                'rules' => $nameRule,
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'TeacherSubject' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mata Pelajaran harus diisi.'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            if($teacherType == 'Guru')
                return redirect()->to('/admin/tenaga-pendidik/update/'.$this->mRequest->getVar('slug'))->withInput()->with('validation', $validation);
            if($teacherType == 'Kepala Sekolah')
                return redirect()->to('admin/kepala-sekolah/update/'.$this->mRequest->getVar('slug'))->withInput()->with('validation', $validation);
        }
        $photoFile = $this->mRequest->getFile('TeacherPhoto');
        if($photoFile->getError() != 4)
        {
            $data = $this->TeacherModel->find($TeacherID);
            $imageFile = $data['TeacherPhoto'];
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
            $this->TeacherModel->save([
                'TeacherID' => $TeacherID,
                'TeacherPhoto' => $photoName,   
                ]);
        }

        $slug = url_title($this->mRequest->getVar('TeacherName'), '-', true);
        $this->TeacherModel->save([
            'TeacherID' => $TeacherID,
            'TeacherNIP' => $this->mRequest->getVar('TeacherNIP'),
            'TeacherName' => $this->mRequest->getVar('TeacherName'),
            'slug' => $slug,
            'TeacherSubject' => $this->mRequest->getVar('TeacherSubject'),
            'TeacherGender' => $this->mRequest->getVar('TeacherGender'),
            'TeacherDesc' => $this->mRequest->getVar('TeacherDesc'),
            'TeacherType' => $teacherType,
        ]);
        if($teacherType == 'Guru')
        {
            session()->setFlashdata('message', 'Data tenaga pendidik telah berhasil diubah.');
            return redirect()->to('admin/tenaga-pendidik');
        }
        if($teacherType == 'Kepala Sekolah')
        return redirect()->to('admin/kepala-sekolah');

    }


    public function delete($TeacherID)
    {
        $this->TeacherModel->find($TeacherID);
        $this->TeacherModel->delete($TeacherID);
        session()->setFlashdata('message', 'Data tenaga pendidik telah berhasil dihapus.');
        return redirect()->to('admin/tenaga-pendidik');
    }
    
    public function deleteHeadmaster($TeacherID)
    {
        $this->TeacherModel->find($TeacherID);
        $this->TeacherModel->delete($TeacherID);
        return redirect()->to('admin/kepala-sekolah');
    }
}