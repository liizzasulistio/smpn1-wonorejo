<?php
namespace App\Controllers;

use App\Models\CommentModel;

class CommentController extends BaseController
{
    public function __construct()
    {
        $this->mRequest = service('request');
        $this->CommentModel = new CommentModel();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $keyword = $this->mRequest->getVar('keyword');
        if($keyword)
        {
            $comment = $this->CommentModel->search($keyword);
        }
        else
        {
            $comment = $this->CommentModel;
        }
        // dd($comment);
        $currentPage = $this->mRequest->getVar('pager') ? $this->mRequest->getVar('pager') : 1;
        $data = [
            'title' => 'Komentar',
            'comment' => $this->CommentModel->join('activities', 'comments.ActivityID_FK = activities.ActivityID')->paginate(10, 'comment'),
            'pager' => $comment->pager,
            'currentPage' => $currentPage,
        ];
        return view('admin/comment/index', $data);
    }

    public function save()
    {
        if($this->mRequest->getMethod() == 'post')
        {
            if(!$this->validate([
                'CommentText' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Isi komentar harus diisi',
                    ],
                ],
            ]))
            {
                $validate = \Config\Services::validation();
                return redirect()->to('/kegiatan/'.$this->mRequest->getVar('slug'))->withInput()->with('validation', $validate);
            }
        }
        $this->CommentModel->save([
            'ActivityID_FK' => $this->mRequest->getVar('ActivityID_FK'),
            'CommentText' => $this->mRequest->getVar('CommentText'),
            'CommentAuthor' => $this->mRequest->getVar('CommentAuthor'),
            'Status' => 'Hidden',
        ]);
        return redirect()->to('/kegiatan/'.$this->mRequest->getVar('slug'));
    }

    public function edit($CommentID)
    {
        $this->CommentModel->save([
            'CommentID' => $CommentID,
            'Status' => $this->mRequest->getVar('Status'),
        ]);
        session()->setFlashdata('message', 'Status komentar telah berhasil diubah.');
        return redirect()->to('admin/komentar');
    }

    public function delete($CommentID)
    {
        $this->CommentModel->find($CommentID);
        $this->CommentModel->delete($CommentID);
        session()->setFlashdata('message', 'Komentar telah berhasil dihapus.');
        return redirect()->to('admin/komentar');
    }
}