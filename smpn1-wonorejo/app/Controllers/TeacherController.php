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
    }

    public function index()
    {
        $data = [
            'title' => 'Tenaga Pendidik',
            'tenagaPendidik' => $this->TeacherModel->getTeacher(), 
        ];
        return view('admin/teacher/index', $data);
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
            
        ]))
        {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/tenaga-pendidik')->withInput()->with('validation', $validation);
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
            'TeacherDesc' => $this->mRequest->getVar('TeacherDesc'),
            'TeacherType' => 'Guru',
        ]);
        return redirect()->to('admin/tenaga-pendidik');
    }




    public function read()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
}