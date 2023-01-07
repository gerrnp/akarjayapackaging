<?php

namespace App\Controllers;

class Comment extends BaseController
{
    public function __construct()
    {
        $this->BlogCommentModels  = new \App\Models\BlogCommentModels();
        $this->BlogModels  = new \App\Models\BlogModels();
    }

    public function add_comnt()
    {
        $slug = $this->request->getVar('slug');
        $dt_blog =  $this->BlogModels->getwhere(['slug_blog_ajp' => $slug])->getRowArray();
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Name masih kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email masih kosong'
                ]
            ],
            'comment' => [
                'rules' => 'required|min_length[30]',
                'errors' => [
                    'required' => 'Komen masih kosong',
                    'min_length' => 'Minimal 30 karakter'
                ]
            ],
        ])) {
            session()->setFlashdata('message', 'Gagal');
            return redirect()->to('Blog/' . $slug)->withInput();
        }

        $this->BlogCommentModels->save([
            'id_blog_ajp' =>  $dt_blog['id_blog_ajp'],
            'name_user_blog_comment_ajp' =>  $this->request->getVar('name'),
            'email_user_blog_comment_ajp' => $this->request->getVar('email'),
            'blog_comment_ajp' => $this->request->getVar('comment'),
        ]);
        // dd($img_blog);
        session()->setFlashdata('message', 'Berhasil');
        return redirect()->to('Blog/' . $slug);
    }
}
