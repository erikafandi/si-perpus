<?php

namespace App\Models;

use CodeIgniter\Model;

class bukuModels extends Model
{
    protected $table = 'tbl_buku';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['cover_buku', 'judul', 'pengarang', 'penerbit', 'tahun_terbit', 'ringkasan_buku', 'jumlah_salinan_tersedia'];

    public function data_buku($id_buku)
    {
        return $this->find($id_buku);
    }
    public function update_data($data, $id_buku)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_buku' => $id_buku)
        );
        return $query;
    }
    public function delete_data($id_buku)
    {
        $query = $this->db->table($this->table)->delete(array('id_buku' => $id_buku));
        return $query;
    }
}
