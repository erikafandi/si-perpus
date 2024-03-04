<?php

namespace App\Models;

use CodeIgniter\Model;

class speminjamanModels extends Model
{
    protected $table = 'tbl_pengembalian';
    protected $primaryKey = 'id_pengembalian';
    protected $allowedFields = ['id_anggota', 'id_transaksi', 'tanggal_dikembalikan', 'telat', 'denda'];

    public function data_speminjaman($id_pengembalian)
    {
        return $this->find($id_pengembalian);
    }
}
