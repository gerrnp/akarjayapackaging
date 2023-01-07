<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModels extends Model
{
    protected $table      = 'kategori_produk_ajp';
    protected $primaryKey = 'id_kategori_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_kategori_produk_ajp', 'slug_kategori_produk_ajp', 'img_kategori_produk_ajp'];
}
