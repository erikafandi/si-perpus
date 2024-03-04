<?php

namespace App\Models;

use CodeIgniter\Model;

class anggotaModels extends Model
{
    protected $table      = 'tbl_anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = ['nama_anggota', 'alamat_anggota', 'nis_nisn', 'no_telp_anggota'];
}
