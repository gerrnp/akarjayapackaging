<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function __construct()
    {
        $this->BlogModels  = new \App\Models\BlogModels();
        $this->BlogComment  = new \App\Models\BlogCommentModels();
    }

    public function index()
    {
        $data = [
            'title' => "Blog",
            'recent_posts' => $this->BlogModels->orderby('created_at', 'DESC')->findAll(),
            'all_blog' => $this->BlogModels->paginate(12),
            'pager_blog' => $this->BlogModels->pager,
        ];
        // dd($data['recent_posts']);
        return view('Blog/index', $data);
    }

    public function dtl_blog($slug_blog_ajp)
    {
        $dt_blog = $this->BlogModels->getwhere(['slug_blog_ajp' => $slug_blog_ajp])->getRowArray();
        $data = [
            'title' => "Blog",
            'recent_posts' => $this->BlogModels->orderby('created_at', 'DESC')->findAll(),
            'blog' => $this->BlogModels->getwhere(['slug_blog_ajp' => $slug_blog_ajp])->getRowArray(),
            'blog_comment' => $this->BlogComment->getwhere(['id_blog_ajp' => $dt_blog['id_blog_ajp']])->getResultArray(),
            'validation' => \Config\Services::validation(),
        ];

        if (empty($data['blog'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sorry Blog tidak ditemukan!');
        }

        return view('Blog/dtl_blog', $data);
    }

    // Dashboard
    public function show_all_blog()
    {
        $data = [
            'title' => "All Blog",
            'blog' => $this->BlogModels->findAll(),
        ];
        return view('Blog/all_blog', $data);
    }

    public function form_add_blog()
    {

        $data = [
            'title' => "Add Blog",
            'blog' => $this->BlogModels->findAll(),
            'validation' => \Config\Services::validation(),
        ];

        return view('Blog/form_add_blog', $data);
    }

    public function created_blog()
    {
        if (!$this->validate([
            'imgblog' => [
                'rules' => 'uploaded[imgblog]|max_size[imgblog,2048]|is_image[imgblog]|mime_in[imgblog,image/jpg,image/jpeg,image/png,image/ico,image/svg]',
                'errors' => [
                    'uploaded' => 'File is Required',
                    'max_size' => 'File size is too large',
                    'is_image' => 'File extension not recognized',
                    'mime_in'  => 'Choose the appropriate File JPEG,JPG, PNG',
                ]
            ],
            'headline' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Head Line is Required'
                ]
            ],
            'contentblog' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Content Blog is Required',
                    'min_length' => 'Must be more than 30 characters'
                ]
            ],
        ])) {
            session()->setFlashdata('message', 'Gagal');
            return redirect()->to('Created_Blog')->withInput();
        }
        $img_blog = $this->request->getFile('imgblog');
        $name_file = $img_blog->getRandomName();
        $img_blog->move('assets/img/blog/', $name_file);

        $blog_slug = url_title($this->request->getVar('headline'), '-', true);
        $this->BlogModels->save([
            'slug_blog_ajp' => $blog_slug,
            'head_blog_ajp' => $this->request->getVar('headline'),
            'content_blog_ajp' => $this->request->getVar('contentblog'),
            'author_blog_ajp' => user()->fullname,
            'img_blog_ajp' => $name_file,
        ]);
        // dd($img_blog);
        session()->setFlashdata('message', 'Berhasil');
        return redirect()->to('My_Blog');
    }

    public function form_updt_blog($slug_blog_ajp)
    {

        $data = [
            'title' => "Update Blog",
            'blog' => $this->BlogModels->getwhere(['slug_blog_ajp' => $slug_blog_ajp])->getRowArray(),
            'validation' => \Config\Services::validation(),
        ];

        return view('Blog/form_updt_blog', $data);
    }

    public function updated_blog()
    {

        $id_blog = $this->request->getVar('idblog');
        $headline = $this->request->getVar('headline');
        $dt_blog = $this->BlogModels->find($id_blog);
        if ($dt_blog['head_blog_ajp'] == $headline) {
            $head_line = $dt_blog['head_blog_ajp'];
            $blog_slug = $dt_blog['slug_blog_ajp'];
        } else {
            $blog_slug = url_title($this->request->getVar('headline'), '-', true);
            $head_line = $headline;
        }
        if (!$this->validate([
            'imgblog' => [
                'rules' => 'is_image[imgblog]|mime_in[imgblog,image/jpg,image/jpeg,image/png,image/ico,image/svg]',
                'errors' => [
                    'max_size' => 'File size is too large',
                    'is_image' => 'File extension not recognized',
                    'mime_in'  => 'Choose the appropriate File JPEG,JPG, PNG',
                ]
            ],
            'headline' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Head Line is Required'
                ]
            ],
            'contentblog' => [
                'rules' => 'required|min_length[30]',
                'errors' => [
                    'required' => 'Content Blog is Required',
                    'min_length' => 'Must be more than 30 characters'
                ]
            ],
        ])) {
            session()->setFlashdata('message', 'Gagal');
            return redirect()->to('Updated_Blog/' . $dt_blog['slug_blog_ajp'])->withInput();
        }

        $file_img = $this->request->getFile('imgblog');

        if ($file_img->getError() == 4) {
            $name_img = $dt_blog['img_blog_ajp'];
        } else {
            $name_img = $file_img->getRandomName();
            $file_img->move('assets/img/blog/', $name_img);
            unlink('assets/img/blog/' . $dt_blog['img_blog_ajp']);
        }

        $this->BlogModels->save([
            'id_blog_ajp' => htmlspecialchars($id_blog),
            'slug_blog_ajp' => htmlspecialchars($blog_slug),
            'head_blog_ajp' => htmlspecialchars($head_line),
            'content_blog_ajp' => $this->request->getVar('contentblog'),
            'author_blog_ajp' => user()->fullname,
            'img_blog_ajp' => $name_img,
        ]);
        // dd($img_blog);

        session()->setFlashdata('message', 'Berhasil');
        return redirect()->to('My_Blog');
    }
}
