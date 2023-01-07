<?php

namespace App\Models;

use CodeIgniter\Model;

class ColorModels extends Model
{
    protected $table      = 'color_produk_ajp';
    protected $primaryKey = 'id_color_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_color_produk_ajp'];
}
