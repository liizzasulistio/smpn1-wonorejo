<?php
namespace App\Controllers;

use App\Models\ActivityModel;
// use App\Models\TagModel;

class ActivityController extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->ActivityModel = new ActivityModel();
        // $this->TagModel = new TagModel();
        $this->pager = \Config\Services::pager();
    }

    // For Admin
    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $activity = $this->ActivityModel->search($keyword);
        }
        else
        {
            $activity = $this->ActivityModel;
        }
        // dd($activity);
        $currentPage = $this->mRequest->getVar('pager') ? $this->mRequest->getVar('pager') : 1;
        $data = [
            'title' => 'Kegiatan',
            'activity' => $this->ActivityModel->join('users', 'activities.UserID_FK = users.UserID')->paginate(10, 'activity'),
            // 'activity' => $this->ActivityModel->paginate(10, 'activity'),
            'pager' => $activity->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/activity/index', $data);

    }

    public function create()
    {

        $data = [
            'title' => 'Buat Kegiatan',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/activity/create', $data);
    }

    public function save()
    {
        if($this->mRequest->getMethod() == 'post')
        {
        if(!$this->validate([
            'ActivityTitle' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul kegiatan harus diisi',
                ],
            ],
            'ActivityText' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi kegiatan harus diisi',
                ],
            ],
            'TagItem' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tag kegiatan harus diisi dan dipisahkan dengan koma',
                ],
            ],
            ]))
            {
                $validation = \Config\Services::validation();
                return redirect()->to('/kegiatan/create')->withInput()->with('validation', $validation);
            }

            chmod('./images/', 0777);
            $photoFile = $this->mRequest->getFile('ActivityImage');
    
            if($photoFile->getError() == 4)
            {
                $photoName = '';
               
            }
            else
            {
                $photoName = $photoFile->getRandomName();
                $photoFile->move('./images', $photoName);
        
            }

            $userID = session()->get('UserID');
            $slug = url_title($this->mRequest->getVar('ActivityTitle'), '-', true);
            $this->ActivityModel->save([
                'ActivityTitle' => $this->mRequest->getVar('ActivityTitle'),
                'slug' => $slug,
                'ActivityText' => $this->mRequest->getVar('ActivityText'),
                'ActivityImage' => $photoName,
                'UserID_FK' => $userID,
                'TagItem' => $this->mRequest->getVar('TagItem'),
            ]);
            session()->setFlashdata('message', 'Kegiatan berhasil ditambahkan.');
            return redirect()->to('/admin/kegiatan');
        }
    }

    public function read($slug)
    {
      $data = [
          'title' => 'Detail Kegiatan',
          'activity' => $this->ActivityModel->getActivity($slug),
      ];
      return view('admin/activity/read', $data);
    }


    public function update($slug)
    {
        $data = [
            'title' => 'Ubah Artikel',
            'activity' => $this->ActivityModel->getActivity($slug),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/activity/update', $data);
    }

    public function edit($ActivityID)
    {
        $oldActivity = $this->ActivityModel->getActivity($this->mRequest->getVar('slug'));
        if($oldActivity['ActivityTitle'] == $this->mRequest->getVar('ActivityTitle'))
        {
            $activityTitle = 'required';
        }
        else
        {
            $activityTitle = 'required|is_unique[activities.ActivityTitle]';
        }

        if(!$this->validate([
            'ActivityTitle' => [
                'rules' => $activityTitle,
                'errors' => [
                    'required' => 'Judul harus diisi.'
                ]
            ],
            'TagItem' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tag kegiatan harus diisi dan dipisahkan dengan koma',
                ],
            ],
        ]))
        {
            $validation = \Config\Services::validation();
        
                return redirect()->to('/admin/kegiatan/update/'.$this->mRequest->getVar('slug'))->withInput()->with('validation', $validation);
           
        }

        $photoFile = $this->mRequest->getFile('ActivityImage');
        if($photoFile->getError() != 4)
        {
            $data = $this->ActivityModel->find($ActivityID);
            $imageFile = $data['ActivityImage'];
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
            $this->ActivityModel->save([
                'ActivityID' => $ActivityID,
                'ActivityImage' => $photoName,   
                ]);
        }
        $userID = session()->get('UserID');
        $slug = url_title($this->mRequest->getVar('ActivityTitle'), '-', true);
        $this->ActivityModel->save([
            'ActivityID' => $ActivityID,
            'ActivityTitle' => $this->mRequest->getVar('ActivityTitle'),
            'slug' => $slug,
            'ActivityText' => $this->mRequest->getVar('ActivityText'),
            'TagItem' => $this->mRequest->getVar('TagItem'),
            'UserID_FK' => $userID,
        ]);

        session()->setFlashdata('message', 'Artikel telah diubah.');
        return redirect()->to('admin/kegiatan');

    }
   
    public function delete($ActivityID)
    {
        $this->ActivityModel->find($ActivityID);
        $this->ActivityModel->delete($ActivityID);
        session()->setFlashdata('message', 'Artikel telah berhasil dihapus.');
        return redirect()->to('admin/kegiatan');
    }


  
}