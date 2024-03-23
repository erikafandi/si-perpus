<?php

namespace App\Models;

use CodeIgniter\Model;

class bukuModels extends Model
{
    protected $table = 'tbl_buku';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['cover_buku', 'judul', 'pengarang', 'penerbit', 'tahun_terbit', 'ringkasan_buku', 'jumlah_salinan_tersedia'];


    public function getBooksInfo()
    {
        $builder = $this->db->table($this->table);
        $builder->select('tbl_buku.id_buku, tbl_buku.cover_buku, tbl_buku.judul, tbl_buku.pengarang, tbl_buku.penerbit, tbl_buku.tahun_terbit, tbl_buku.ringkasan_buku, tbl_buku.jumlah_salinan_tersedia, tbl_kategori.nama_kategori');
        $builder->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_buku.id_kategori');
        $query = $builder->get();

        return $query->getResult();
    }

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
