<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use App\Models\bukuModels;

class Buku extends BaseController

{
    protected $bukuModels;
    public function __construct()
    {
        $this->bukuModels = new bukuModels();
    }
    public function index()
    {
        $buku = $this->bukuModels->findAll();
        $data = [
            'title' => 'Data agenda',
            'daftar_buku' => $buku
        ];
        return view('pages/backend/buku', $data);
    }

    public function tambah()
    {
        $data = ['title' => 'Tambah Data Buku'];
        return view('pages/backend/buku/tambah', $data);
    }
}
