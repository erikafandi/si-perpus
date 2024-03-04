<?php

namespace App\Models;

use CodeIgniter\Model;

class transaksiModels extends Model
{
    protected $table      = 'tbl_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_anggota', 'id_buku', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status'];
}
