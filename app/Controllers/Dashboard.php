<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->KategoriModels  = new \App\Models\KategoriModels();
    }
    public function index()
    {
        $data = [
            'title' => "Dashboard",
            'kategori' => $this->KategoriModels->findAll(),
        ];
        return view('Dashboard/index', $data);
    }

    public function my_profile()
    {
        $data = [
            'title' => "My Profile",
            'kategori' => $this->KategoriModels->findAll(),
            'validation' => \Config\Services::validation(),
        ];
        return view('Dashboard/my_profile', $data);
    }
}
