<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\bukuModels;


class buku extends BaseController
{
    protected $bukuModels;
    public function __construct()
    {
        $this->bukuModels = new bukuModels();
    }


    public function index()
    {
        // manggil model yaitu beritaModels() = ngambil data berita
        // mengurutkan data dari yang terbaru ( descending )

        $buku = $this->bukuModels->findAll();
        $data = [
            'title' => 'Data Berita',
            'buku' => $buku
        ];

        // memanggil view index
        return view('pages/frontend/dbuku', $data);
    }
}
