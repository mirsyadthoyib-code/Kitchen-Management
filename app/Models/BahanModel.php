<?php

namespace App\Models;

use CodeIgniter\Model;

class BahanModel extends Model
{
    protected $table = 'bahan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'harga', 'satuan_beli', 'satuan_pakai', 'konversi'];

    public function getBahan($id = false)
    {
        if ($id == false)
        {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}