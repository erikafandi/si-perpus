<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\transaksiModels;
use App\Models\anggotaModels;
use App\Models\bukuModels;

class transaksi extends BaseController
{
    protected $transaksiModels, $anggotaModels, $bukuModels;

    public function __construct()
    {
        $this->transaksi = new transaksiModels();
        $this->anggota = new anggotaModels();
        $this->buku = new bukuModels();
    }

    public function index()
    {
        $data['transaksi'] = $this->transaksi->getAll();
        return view('pages/backend/transaksi', $data);
    }

    public function tambah()
    {
        $data = [
            'anggota' => $this->anggota->findAll(),
            'buku' => $this->buku->findAll(),
        ];
        return view('pages/backend/transaksi/tambah', $data);
    }

    public function simpan()
    {
        $id_anggota = $this->request->getVar('id_anggota');
        $id_buku = $this->request->getVar('id_buku');

        $this->transaksi->save([
            'id_anggota' => $id_anggota,
            'id_buku' => $id_buku,
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->request->getVar('tanggal_pengembalian'),
        ]);
        return redirect()->to('admin/transaksi');
    }

    public function edit($id_transaksi)
    {
        $buku = $this->buku->data_buku($id_buku);
        $anggota = $this->anggota->findAll();
        $data = [
            'title' => 'Edit Data Transaksi',
            'Buku' => $buku,
            'Anggota' => $anggota,
        ];

        return view('pages/backend/transaksi/edit', $data);
    }

    public function update()
    {
        $id_anggota = $this->request->getVar('id_anggota');
        $id_buku = $this->request->getVar('id_buku');
        $data = [
            'id_anggota' => $id_anggota,
            'id_buku' => $id_buku,
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->request->getVar('tanggal_pengembalian'),
        ];


        $this->transaksi->update_data($data, $id_transaksi);
        return redirect()->to('admin/transaksi');
    }


    public function delete($id_transaksi)
    {




        // penghapusan database
        $this->transaksi->delete_data($id_transaksi);

        // mengakses halaman berita
        return redirect()->to('admin/transaksi');
    }
}
