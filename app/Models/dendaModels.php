<?php

namespace App\Models;

use CodeIgniter\Model;

class dendaModels extends Model
{
    protected $table = 'tbl_denda';
    protected $primaryKey = 'id_denda';
    protected $allowedFields = ['denda'];

    public function data_denda($id_denda)
    {
        return $this->find($id_denda);
    }
}
