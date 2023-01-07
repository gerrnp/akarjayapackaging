<?php

namespace App\Models;

use CodeIgniter\Model;

class MerkModels extends Model
{
    protected $table      = 'merk_produk_ajp ';
    protected $primaryKey = 'id_merk_produk_ajp ';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_merk_produk_ajp '];
}
