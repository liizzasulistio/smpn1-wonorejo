<?php
namespace App\Controllers;

use App\Models\ActivityModel;
use App\Models\TagModel;

class ActivityController extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->mRequest = service('request');
        $this->ActivityModel = new ActivityModel();
        $this->TagModel = new TagModel();
    }

    // For Admin
    public function index()
    {

        $data = [
            'title' => 'Kegiatan',
            'activity' => $this->ActivityModel->getActivity(),
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
            $tag = $this->mRequest->getVar('TagItem');
            $separator = explode(',', $tag);
            $i = 0;

            foreach($separator as $s)
            {
                $this->TagModel->save(
                    [
                        'slug_FK' => $slug,
                        'TagItem' => $s
                    ]);
                // $query = $this->TagModel->insert($slug, $s);
                $i++;
            }
          
            $this->ActivityModel->save([
                'ActivityTitle' => $this->mRequest->getVar('ActivityTitle'),
                'slug' => $slug,
                'ActivityText' => $this->mRequest->getVar('ActivityText'),
                'ActivityImage' => $photoName,
                'UserID_FK' => $userID,
                'TagItem' => $this->mRequest->getVar('TagItem'),
            ]);

            return redirect()->to('/admin/kegiatan');
        }
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